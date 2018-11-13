<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Hash;

class DashboardAccountController extends Controller
{
    public function index()
    {
        $data = User::find(Auth::user()->id);
        return view('dashboard.account.index',compact('data'));
    }

    public function update(Request $request)
    {
        $id     = Auth::user()->id;
        $data   = User::find($id);

        $validate =  Validator::make($request->all(),[
            'first_name'        => 'required|string|max:255',
            'middle_name'       => 'nullable|string|max:255',
            'last_name'         => 'nullable|string|max:255',
            'address'           => 'nullable',
        ]);

        if($validate->fails()){
            $message = 'Ada sesuatu yang eror, hubungi admin aja kalau anda tidak yakin.';
        }else{
            $data->first_name        = $request->first_name;
            $data->middle_name      = $request->middle_name;
            $data->last_name        = $request->last_name;
            $data->address          = $request->address;
            $data->save();
            $message = 'Data Berhasil di Update';
        }

        return redirect()->route('account')->with('notification',$message);
    }


    public function pin(){
        return view('dashboard.account.pin');
    }

    public function pinUpdate(Request $request){
        $id     = Auth::user()->id;
        $data   = User::find($id);

        $validate =  Validator::make($request->all(),[
            'pin'       => 'string|required|min:7|max:7',
            'newpin'    => 'string|required|min:7|max:7',
        ]);

        if($validate->fails()){
            $message = 'pin harus 7 karakter';
        }

        if($request->pin == $request->newpin){
            $data->pin = $request->pin;
            $data->save();
            $message = 'Data Berhasil di Update';
        }else{
            $message = 'Data Gagal di Update, Pin baru harus sama.';
        }

        return redirect()->route('pin')->with('notification',$message);
    }

    public function password(){
        return view('dashboard.account.password');
    }

    public function changePassword(Request $request){
        $id     = Auth::user()->id;
        $data   = User::find($id);

        $validate =  Validator::make($request->all(),[
            'password'       => 'string|required|min:6',
            'newpassword'    => 'string|required|min:6',
        ]);

        if($validate->fails()){
            $message = 'password minimal harus 6 karakter';
        }

        if($request->password == $request->newpassword){
            $data->password = Hash::make($request->password);
            $data->save();
            $message = 'Data Berhasil di Update';
        }else{
            $message = 'Data Gagal di Update, Pin baru harus sama.';
        }

        return redirect()->route('password')->with('notification',$message);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
