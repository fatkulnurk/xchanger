<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        $datas = User::all();
//        return $datas;
        return view('dashboard.admin.user.index',compact('datas'));
    }

    public function show($id)
    {
        $result = User::find($id);


        return view('dashboard.admin.user.show', [
            'data' => $result
        ]);
    }
}
