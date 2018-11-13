<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency;

class AdminCurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas  = Currency::all();
        return view('dashboard.admin.currency.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.currency.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data                   = new Currency();
        $data->currency_name    = $request->currency_name;
        $data->payment_name     = $request->payment_name;
        $data->stock            = $request->stock;
        $data->price            = $request->price;
        $data->account_holder   = $request->account_holder;
        $data->account_number   = $request->account_number;
        $data->message          = $request->message;
        $data->save();

        $message = "Data Berhasil ditambahkan";

        return redirect()->route('currency.index')->with('notification',$message);;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Currency::find($id);


        return view('dashboard.admin.currency.show', [
                'data' => $result
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Currency::where('id', $id)->get();
        return view('dashboard.admin.currency.edit', [
            'data' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Currency::where('id', $id)->first();

        $data->currency_name    = $request->currency_name;
        $data->payment_name     = $request->payment_name;
        $data->stock            = $request->stock;
        $data->price            = $request->price;
        $data->account_holder   = $request->account_holder;
        $data->account_number   = $request->account_number;
        $data->message          = $request->message;

        $data->save();
        return redirect()->route('currency.index')->with('notification','Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Currency::where('id', $id)->first();
        $data->delete();
        return redirect()->route('currency.index')->with('notification','Data Berhasil dihapus');;
    }
}
