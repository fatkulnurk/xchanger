<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    public function currency(){
        $data = Currency::all();
        return view('home.pages.currency',['currency' => $data]);
    }

    public function rates(){
        $data = Currency::all();
        return view('home.pages.rates',['currency' => $data]);
    }
}
