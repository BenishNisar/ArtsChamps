<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class BillingController extends Controller
{



    function index(){

        $billing = DB::select('select * from billing');

        return view('dashboard.admin.billing.index',compact('billing'));

    }

}
