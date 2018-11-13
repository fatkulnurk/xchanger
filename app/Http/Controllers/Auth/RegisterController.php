<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserRole;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [

            'first_name'        => 'required|string|max:255',
            'middle_name'       => 'nullable|string|max:255',
            'last_name'         => 'nullable|string|max:255',
            'gender'            => 'required',
            'birthday'          => 'required|date',
            'country'           => 'required',
            'address'           => 'nullable',
            'pin'               => 'required|max:7|min:7',
            'email'             => 'required|email|unique:user',
            'phone_number'      => 'required|string|max:20|unique:user',
            'password'          => 'required|string|min:6'

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user_role = UserRole::where('name','member')->first();

         return User::create([
            'first_name'    => $data['first_name'],
            'middle_name'   => $data['middle_name'],
            'last_name'     => $data['last_name'],
            'email'         => $data['email'],
            'gender'        => $data['gender'],
            'phone_number'  => $data['phone_number'],
            'birthday'      => $data['birthday'],
            'address'       => $data['address'],
            'country'       => $data['country'],
            'pin'           => $data['pin'],
            'role_id'       => $user_role['id'],
            'verified'      => 'no',
            'active'        => 'active',
            'password'      => Hash::make($data['password']),
        ]);
    }
}
