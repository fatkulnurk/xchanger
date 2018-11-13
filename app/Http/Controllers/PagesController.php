<?php

namespace App\Http\Controllers;

use App\Currency;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function homepage(){
        $currency  = Currency::all();

        return view('home.index',['data' => $currency]);
    }

    public function homepageCount(Request $request){

        $currency           = Currency::find($request->currency);
        $count_amount_get   = $currency->price * $request->amount;


        return redirect()->route('homepage')->with('count_money',$count_amount_get);

        // if validation fails
//        if($validate->fails()){
//
//            $message = 'Transaksi Gagal, Ada formulir yang belum di isi.';
//
//        }else{
//
//        }
    }

    public function rates(){
        $data = Currency::all();
        return view('home.pages.rates',['currency' => $data]);
    }

    public function currency(){
        $data = Currency::all();
        return view('home.pages.currency',['currency' => $data]);
    }

    public function fee(){
        return view('home.pages.fee');
    }

    public function review(){
        return view('home.pages.review');
    }

    public function contact(){
        return view('home.pages.contact');
    }
}
