<?php

namespace App\Http\Controllers;

use App\User;
use App\UserRole;
use Illuminate\Http\Request;

class AdminUserRoleController extends Controller
{
    public function index(){
        $datas = UserRole::all();
        return view('dashboard.admin.userrole.index',compact('datas'));
    }

    public function create()
    {
        return view('dashboard.admin.userrole.create');
    }

    public function store(Request $request)
    {
        $data                   = new UserRole();
        $data->name             = $request->name;
        $data->description      = $request->description;
        $data->save();
        return redirect()->route('userrole.index');
    }

    public function show($id)
    {
        $result = UserRole::find($id);


        return view('dashboard.admin.userrole.show', [
            'data' => $result
        ]);
    }

    public function edit($id)
    {
        $data = UserRole::where('id', $id)->get();
        return view('dashboard.admin.userrole.edit', [
            'data' => $data
        ]);
    }

    public function update(Request $request, $id)
    {
        $data = UserRole::where('id', $id)->first();
        $data->name             = $request->name;
        $data->description      = $request->description;
        $data->save();

        return redirect()->route('userrole.index')->with('notification','Data Berhasil di ubah');
    }

    public function destroy($id)
    {
        $data = UserRole::where('id', $id)->first();
        $data->delete();
        return redirect()->route('userrole.index')->with('notification','Data Berhasil dihapus');;

    }
}
