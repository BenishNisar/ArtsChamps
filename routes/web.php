<?php
namespace App\Http\Controllers;



use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login-store',[LoginController::class,'loginstore']);
Route::get('/register',[LoginController::class,'register']);
Route::get('/register-store',[LoginController::class,'registerstore']);
Route::get('/logout',[LoginController::class,'logout']);



Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');



Route::put('/about/update', [HomeController::class, 'update'])->name('about.update')->middleware('auth');


Route::get('/Home/profile',[FrontendProfileController::class,'index']);


Route::get('/Home/messages',[FrontendMessageController::class,'index']);
Route::get('/Home/gallery',[FrontendGalleryController::class,'index']);


// Route::get('/Front_dashboard',[AdminController::class,'dashboardadmin']);
// Route::get('/users',[UserController::class,'users']);


// dashboard routes

Route::get('admin/login',[AdminLoginController::class,'adminlogin'])->name('adminlogin');
Route::post('admin/login-store',[AdminLoginController::class,'adminloginstore']);
Route::get('admin/logout',[AdminLoginController::class,'logout'])->name('admin.logout');


Route::get('/dashboard',[AdminController::class,'index'])->middleware(['auth','adminlogin']);
Route::get('/dashboard/admin/users/',[UserController::class,'index']);
Route::get('/dashboard/admin/users/add',[UserController::class,'add']);
Route::post('/dashboard/admin/users/store',[UserController::class,'store']);
Route::get('/dashboard/admin/users/edit/{id}',[UserController::class,'edit']);
Route::post('/dashboard/admin/users/update/{id}',[UserController::class,'update']);
Route::get('/dashboard/admin/users/delete/{id}',[UserController::class,'delete']);

Route::get('/dashboard/admin/role/',[RoleController::class,'index']);
Route::get('/dashboard/admin/role/add',[RoleController::class,'add']);
Route::post('/dashboard/admin/role/store',[RoleController::class,'store']);
Route::get('/dashboard/admin/role/edit/{id}',[RoleController::class,'edit']);
Route::post('/dashboard/admin/role/update/{id}',[RoleController::class,'update']);
Route::get('/dashboard/admin/role/delete/{id}',[RoleController::class,'delete']);



Route::get('dashboard/admin/profile/add', [ProfileController::class, 'add'])->name('profile.add');

// Handle the form submission to store a new profile (POST request)
Route::post('dashboard/admin/profile/store', [ProfileController::class, 'store'])->name('profile.store');

// Other routes
Route::get('dashboard/admin/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('dashboard/admin/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('dashboard/admin/profile/update/{id}', [ProfileController::class, 'update'])->name('profile.update');
Route::get('dashboard/admin/profile/delete/{id}', [ProfileController::class, 'delete'])->name('profile.delete');



Route::get('/dashboard/admin/about/',[AboutController::class,'index']);
Route::get('/dashboard/admin/about/add',[AboutController::class,'add']);
Route::post('/dashboard/admin/about/store', [AboutController::class, 'store']);
Route::get('/dashboard/admin/about/edit/{id}',[AboutController::class,'edit']);
Route::post('/dashboard/admin/about/update/{id}',[AboutController::class,'update']);
Route::get('/dashboard/admin/about/delete/{id}',[AboutController::class,'delete']);




Route::get('/dashboard/admin/userprofile/',[UserprofileController::class,'index']);
Route::get('/dashboard/admin/userprofile/add',[UserprofileController::class,'add']);
Route::post('/dashboard/admin/userprofile/store',[UserprofileController::class,'store']);
Route::get('/dashboard/admin/userprofile/edit/{id}',[UserprofileController::class,'edit']);
Route::post('/dashboard/admin/userprofile/update/{id}',[UserprofileController::class,'update']);
Route::get('/dashboard/admin/userprofile/delete/{id}',[UserprofileController::class,'delete']);

Route::get('/dashboard/admin/aboutprofile/',[AboutProfileController::class,'index']);
Route::get('/dashboard/admin/aboutprofile/add',[AboutProfileController::class,'add']);
Route::post('/dashboard/admin/aboutprofile/store',[AboutProfileController::class,'store']);
Route::get('/dashboard/admin/aboutprofile/edit/{id}',[AboutProfileController::class,'edit']);
Route::post('/dashboard/admin/aboutprofile/update/{id}',[AboutProfileController::class,'update']);
Route::get('/dashboard/admin/aboutprofile/delete/{id}',[AboutProfileController::class,'delete']);


Route::get('/dashboard/admin/notification/',[NotificationController::class,'index']);
Route::get('/dashboard/admin/notification/add',[NotificationController::class,'add']);
Route::post('/dashboard/admin/notification/store',[NotificationController::class,'store']);
Route::get('/dashboard/admin/notification/edit/{id}',[NotificationController::class,'edit']);
Route::post('/dashboard/admin/notification/update/{id}',[NotificationController::class,'update']);
Route::get('/dashboard/admin/notification/delete/{id}',[NotificationController::class,'delete']);


Route::get('/dashboard/admin/user_notification/',[UserNotificationsController::class,'index']);
Route::get('/dashboard/admin/user_notification/add',[UserNotificationsController::class,'add']);
Route::post('/dashboard/admin/user_notification/store',[UserNotificationsController::class,'store']);
Route::get('/dashboard/admin/user_notification/edit/{id}',[UserNotificationsController::class,'edit']);
Route::post('/dashboard/admin/user_notification/update',[UserNotificationsController::class,'update']);
Route::get('/dashboard/admin/user_notification/delete/{id}',[UserNotificationsController::class,'delete']);


Route::get('/dashboard/admin/artwork/',[ArtworksController::class,'index']);
Route::get('/dashboard/admin/artwork/add',[ArtworksController::class,'add']);
Route::post('/dashboard/admin/artwork/store',[ArtworksController::class,'store']);
Route::get('/dashboard/admin/artwork/edit/{id}',[ArtworksController::class,'edit']);
Route::put('/dashboard/admin/artwork/update/{id}',[ArtworksController::class,'update']);
Route::get('/dashboard/admin/artwork/delete/{id}',[ArtworksController::class,'delete']);


Route::get('/dashboard/admin/gallery',[GalleryController::class,'index']);
Route::get('/dashboard/admin/gallery/add',[GalleryController::class,'add']);
Route::post('/dashboard/admin/gallery/store',[GalleryController::class,'store']);
Route::get('/dashboard/admin/gallery/edit/{id}',[GalleryController::class,'edit']);
Route::post('/dashboard/admin/gallery/update/{id}',[GalleryController::class,'update']);
Route::get('/dashboard/admin/gallery/delete/{id}',[GalleryController::class,'delete']);



Route::get('/dashboard/admin/user_about/',[UseraboutController::class,'index']);
Route::get('/dashboard/admin/user_about/add',[UseraboutController::class,'add']);
Route::post('/dashboard/admin/user_about/store',[UseraboutController::class,'store']);
Route::get('/dashboard/admin/user_about/edit/{id}',[UseraboutController::class,'edit']);
Route::post('/dashboard/admin/user_about/update/{id}',[UseraboutController::class,'update']);
Route::get('/dashboard/admin/user_about/delete/{id}',[UseraboutController::class,'delete']);



Route::get('/dashboard/admin/post/',[PostController::class,'index']);
Route::get('/post/create', [PostController::class, 'create'])->name('post.create'); // Show form to create a new post
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');
Route::post('/post/store', [HomeController::class, 'storePost'])->name('post.store');
Route::get('/dashboard/admin/post/add',[PostController::class,'add']);
Route::post('/dashboard/admin/post/store',[PostController::class,'store']);
Route::get('/dashboard/admin/post/edit/{id}',[PostController::class,'edit']);
Route::post('/dashboard/admin/post/update/{id}',[PostController::class,'update']);
Route::get('/dashboard/admin/post/delete/{id}',[PostController::class,'delete']);



Route::get('/dashboard/admin/messages/',[MessageController::class,'index']);
Route::get('/dashboard/admin/messages/add',[MessageController::class,'add']);
Route::post('/dashboard/admin/messages/store',[MessageController::class,'store']);
Route::get('/dashboard/admin/messages/edit/{id}',[MessageController::class,'edit']);
Route::post('/dashboard/admin/messages/update/{id}',[MesssageController::class,'update']);
Route::get('/dashboard/admin/messages/delete/{id}',[MessageController::class,'delete']);

Route::get('/dashboard/admin/socialmedia/',[SocialController::class,'index']);
Route::get('/dashboard/admin/socialmedia/add',[SocialController::class,'add']);
Route::post('/dashboard/admin/socialmedia/store',[SocialController::class,'store']);
Route::get('/dashboard/admin/socialmedia/edit/{id}',[SocialController::class,'edit']);
Route::post('/dashboard/admin/socialmedia/update/{id}',[SocialController::class,'update']);
Route::get('/dashboard/admin/socialmedia/delete/{id}',[SocialController::class,'delete']);




Route::get('/dashboard/admin/friend/',[FriendController::class,'index']);
Route::get('/dashboard/admin/friend/add',[FriendController::class,'add']);
Route::post('/dashboard/admin/friend/store',[FriendController::class,'store']);
Route::get('/dashboard/admin/friend/edit/{id}',[FriendController::class,'edit']);
Route::post('/dashboard/admin/friend/update/{id}',[FriendController::class,'update']);
Route::get('/dashboard/admin/friend/delete/{id}',[FriendController::class,'delete']);
