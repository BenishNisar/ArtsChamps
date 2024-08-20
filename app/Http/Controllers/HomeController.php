<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\BillingDetail;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $userId = Auth::user()->id;
        $about = DB::select('
            SELECT users.id, users.firstname, about.about_id, about.bio,
            about.date_of_birth, about.work, about.live,
            about.location, about.social_media, about.art_style, about.rating,about.photos
            FROM about
            INNER JOIN users ON about.user_id = users.id
            WHERE users.id = ?', [$userId]);

        $about = !empty($about) ? $about[0] : null;


        // $posts = DB::select('select post.*,likes.status lstatus from post left join  likes on post.post_id = likes.post_id
        // order by post.created_at desc');


        $posts =  Db::select('SELECT
    p.*,
    l.status as lstatus,
    l.user_id AS liked_by_user_id
FROM
    post p
LEFT JOIN
    likes l ON p.post_id = l.post_id AND l.user_id = ?
ORDER BY
    p.created_at DESC;
', [Auth::user()->id]);


        $likes = DB::select('select likes.id,likes.user_id,likes.created_at,likes.post_id,
          post.post_id,post.content,post.created_at,post.post_img,users.id

            from likes inner join users on likes.user_id=users.id inner join post
                  on post.user_id=post.post_id');



        $profile = DB::select('select * from profile where user_id = ? order by profile_id desc limit 1', [Auth::user()->id]);
        // $gallery=DB::select('select users.id,gallery.gallery_img from gallery inner join users on gallery.user_id=users.id');
        $gallery = DB::select('select * from gallery where user_id = ? order by gallery_id desc', [Auth()->user()->id]);

        return view('Home.welcome', compact('about', 'posts', 'likes', 'profile', 'gallery'));
    }

    public function showProfile()
    {
        return $this->index(); // This method seems redundant if it does the same thing as index()
    }

    public function update(Request $request)
    {
        $userId = Auth::user()->id;

        // Validate the request data
        $validatedData = $request->validate([
            'work' => 'required|string|min:3',
            'art_style' => 'required|string|min:3',
            'live' => 'required|string|min:3',
            'location' => 'required|string|min:3',
            'bio' => 'required|string|min:3',

        ]);

        // Check if the record exists
        $about = DB::table('about')->where('user_id', $userId)->first();

        if ($about) {
            // Update the record
            DB::table('about')->where('user_id', $userId)->update($validatedData);
        } else {
            // Insert a new record
            $validatedData['user_id'] = $userId;
            DB::table('about')->insert($validatedData);
        }

        return redirect()->route('home')->with('status', 'Profile updated successfully');
    }


    public function storePost(Request $req)
    {
        $userId = Auth::user()->id;

        // Validate the request data
        $req->validate([
            'content' => 'required|string|max:255',
            'price' => 'required|numeric',

            'post_img' => 'required|image',
        ]);

        if ($req->hasFile('post_img')) {

            $img = $req->file('post_img');
            $imageName = time() . $img->getClientOriginalName();
            $img->move('posts/', $imageName);
            $imgpath = "posts/" . $imageName;
            // $imgpath ="storage/app/posts/".$imageName;

            // $img->storeAs('posts',$imageName);

            // $imgname = $request->file('post_img')->store('posts');
        }

        // $data['user_id'] = $userId;
        // $data['created_at'] = now(); // Optionally set the creation time

        // // Insert the post into the database
        // DB::table('post')->insert($data);
        Db::insert(
            'insert into post(content,created_at,post_img,user_id,price) values(?,?,?,?,?)',
            [
                $req->content,
                now(),
                $imgpath,
                $userId,
                $req->price
            ]


        );

        return redirect()->route('home')->with('status', 'Post created successfully');
    }

    function likePost(Request $req)
    {

        if ($req->lstatus == 1) {

            Db::update('update likes set status = ? where user_id = ? and  post_id = ?', [0, Auth::user()->id, $req->post_id]);

            return response()->json(['message' => true, 'message' => 'Post DisLiked']);
        } else {


            Db::insert('insert into likes(post_id,created_at,user_id,status) values(?,?,?,?)', [$req->post_id, now(), Auth()->user()->id, 1]);
            return response()->json(['success' => true, 'message' => 'Post Liked']);
        }
    }


    public function allcomments($id)
    {
        $comments = DB::select(
            'SELECT comment.*, users.profile_img, users.firstname, users.lastname
        FROM comment
        LEFT JOIN users ON users.id = comment.user_id
        WHERE comment.post_id = ?',
            [$id]
        );

        return response()->json(['comments' => $comments]);
    }



    // gallery


    public function uploadImage(Request $request)
    {

        $request->validate([
            'gallery_img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $imageName = time() . '.' . $request->gallery_img->extension();
        $request->gallery_img->move(public_path('gallery_images'), $imageName);
        $imgPath = 'gallery_images/' . $imageName;


        DB::table('gallery')->insert([
            'user_id' => Auth::user()->id,
            'gallery_img' => $imgPath,
            'created_at' => now(),
        ]);


        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }

    // modalpost


    public function show($id)
    {
        $post = Post::find($id);
        return view('Home.welcome', compact('post'));
    }





    public function saveBilling(Request $request)
    {
        $billingData = DB::select('
            SELECT
                users.firstname,
                users.lastname,
                card_details.card_number,
                card_details.expiration_date,
                card_details.card_holder_name,
                users.email,
                users.phone,
                billing.billing_country,
                billing.billing_state,
                billing.billing_zip,
                billing.billing_address,
                billing.billing_city,
                billing.total_amount,
                payment_methods.method_name
            FROM orders
            INNER JOIN card_details ON orders.id = card_details.order_id
            INNER JOIN billing ON billing.order_id = orders.id
            INNER JOIN users ON users.id = orders.user_id
            INNER JOIN payment_methods ON orders.payment_method_id = payment_methods.id
        ');



        return response()->json(['success' => true, 'data' => $billingData]);
    }



    public function saveSecondForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'card_number' => 'required|numeric',
            'expiration_date' => 'required|date',
            'card_holder_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'billing_country' => 'required|string',
            'billing_state' => 'required|string',
            'billing_zip' => 'required|string|max:10',
            'billing_address' => 'required|string|max:255',
            'billing_city' => 'required|string|max:255',
        ]);

        // Save the data to the database
        BillingDetail::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'card_number' => $request->card_number,
            'expiration_date' => $request->expiration_date,
            'card_holder_name' => $request->card_holder_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'billing_country' => $request->billing_country,
            'billing_state' => $request->billing_state,
            'billing_zip' => $request->billing_zip,
            'billing_address' => $request->billing_address,
            'billing_city' => $request->billing_city,
        ]);

        return response()->json(['message' => 'Billing details saved successfully']);
    }




    public function finalizeBilling(Request $request)
    {

        $request->validate([
            'method_name' => 'required|string',
        ]);


        PaymentMethod::create([
            'method_name' => $request->method_name,
        ]);


        return redirect()->back()->with('success', 'Payment method saved successfully');
    }


}
