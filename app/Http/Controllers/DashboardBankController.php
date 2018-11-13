<?php

namespace App\Http\Controllers;

use App\UserBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;


class DashboardBankController extends Controller
{

    public function index(){
        $data = UserBank::where('user_id',Auth::id())
            ->get();

        return view('dashboard.bank.list', ['data' => $data]);
    }

    public function show($id){

        $data = UserBank::find($id)
                ->where('user_id',Auth::id())
            ->get();

        return view('dashboard.bank.detail', ['data' => $data]);
//        return view('dashboard.bank.detail')->with(compact('data'));

    }

    public function create(){
        return view('dashboard.bank.add');
    }

    public function store(Request $request){
        $validate =  Validator::make($request->all(),[
            'payment_title'     => 'required',
            'description'       => 'nullable',
            'bank_name'         => 'required',
            'account_holder'    => 'required',
            'account_number'    => 'required',
            'currency'          => 'required'
        ]);

        if($validate->fails()){
            $message = 'Data Gagal ditambahkan, Sepertinya ada form yang masih belum kamu isi.';
        }else{
            $data                   = new UserBank();
            $data->user_id          = Auth::id();
            $data->payment_title    = $request->payment_title;
            $data->description      = $request->description;
            $data->bank_name        = $request->bank_name;
            $data->account_holder   = $request->account_holder;
            $data->account_number   = $request->account_number;
            $data->currency         = $request->currency;
            $data->save();
            $message = 'Data Berhasil di tambahkan';
        }

        return redirect()->route('bank')->with('notification',$message);
    }

}
