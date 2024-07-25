<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RoleController extends Controller
{
function index(){

    $roles = DB::select('select * from roles');

    return view('dashboard.admin.role.index',compact('roles'));

}
function add(){

    return view('dashboard.admin.role.add');

    }


function store(Request $req){

    $req->validate([
        'name' => 'required | min:3'
    ]);

    DB::insert('insert into roles(role_name) values (?)', [$req->name]);

    session()->flash('status','Recored Inserted');

    return redirect('dashboard/admin/role');
    }

    function edit($id){

        $role = DB::select('select * from roles where role_id = ?',[$id]);

        $role = $role[0];

        return view('dashboard.admin.role.edit',compact('role'));

        }

    function update($id, Request $req){

        $role = DB::update('update roles set role_name = ? where role_id = ?',[$req->name,$id]);

        session()->flash('status','Recored Updated');

        return redirect('dashboard/admin/role');

        }

        function delete($id){

            Db::delete('delete from roles where role_id = ?',[$id]);

            session()->flash('status','Recored Deleted');

            return redirect('dashboard/admin/role');


        }


}
