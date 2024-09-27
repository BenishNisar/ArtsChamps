<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    function index(){

        $payment = DB::select('select * from payment_methods');

        return view('dashboard.artist.payment_method.index',compact('payment'));

    }
}
