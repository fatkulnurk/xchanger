<?php

namespace App\Http\Controllers;

use App\StatusTransaction;
use App\TypeTransaction;
use Illuminate\Http\Request;

class AdminStatusTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas  = StatusTransaction::all();
        return view('dashboard.admin.statustransaction.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.statustransaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data                   = new StatusTransaction();
        $data->name             = $request->name;
        $data->description      = $request->description;
        $data->save();
        return redirect()->route('statustransaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = StatusTransaction::find($id);


        return view('dashboard.admin.statustransaction.show', [
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
        $data = StatusTransaction::where('id', $id)->get();
        return view('dashboard.admin.statustransaction.edit', [
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
        $data = StatusTransaction::where('id', $id)->first();
        $data->name             = $request->name;
        $data->description      = $request->description;
        $data->save();

        return redirect()->route('statustransaction.index')->with('notification','Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = StatusTransaction::where('id', $id)->first();
        $data->delete();
        return redirect()->route('statustransaction.index')->with('notification','Data Berhasil dihapus');;

    }
}
