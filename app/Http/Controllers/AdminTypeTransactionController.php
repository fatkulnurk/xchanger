<?php

namespace App\Http\Controllers;

use App\TypeTransaction;
use Illuminate\Http\Request;

class AdminTypeTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas  = TypeTransaction::all();
        return view('dashboard.admin.typetransaction.index',compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.typetransaction.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data                   = new TypeTransaction();
        $data->name             = $request->name;
        $data->description      = $request->description;
        $data->save();
        return redirect()->route('typetransaction.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = TypeTransaction::find($id);


        return view('dashboard.admin.typetransaction.show', [
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
        $data = TypeTransaction::where('id', $id)->get();
        return view('dashboard.admin.typetransaction.edit', [
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
        $data = TypeTransaction::where('id', $id)->first();
        $data->name             = $request->name;
        $data->description      = $request->description;
        $data->save();

        return redirect()->route('typetransaction.index')->with('notification','Data Berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = TypeTransaction::where('id', $id)->first();
        $data->delete();
        return redirect()->route('typetransaction.index')->with('notification','Data Berhasil dihapus');;

    }
}
