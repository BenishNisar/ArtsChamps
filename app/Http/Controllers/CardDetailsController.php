<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CardDetailsController extends Controller
{
    function index(){

        $card_details = DB::select('select * from card_details');

        return view('dashboard.artist.card_details.index',compact('card_details'));

    }
}
