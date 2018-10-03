<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(){
        $data = Currency::all();
        return view('home.pages.currency',['currency' => $data]);
    }

    public function add(){

    }

    public function show($id){
        return view('home.pages.currency',['blog' => $id]);
        // di controller nanti nampilinnya variabel blog
    }

    public function update(Request $request, $id){
//        return view('pages.currency',['blog' => $id]);
    }
}
