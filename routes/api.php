<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('',function (){
    return response()->json([
        'status'    => true,
        'message' => 'Halo selamat datang di End Point api dari '.getenv('APP_NAME'),
        'documentation' => 'http://wkwkwkwkkw.com',
        'pages' => [
            'login'     => [
                'endpoint'  => getenv('APP_URL').'api/login',
                'method'    => 'POST',
                'parameter' => 'email & password',
                'status'    => 'open',
            ],
            'register'      => [
                'endpoint'  => getenv('APP_URL').'api/register',
                'method'    => 'POST',
                'parameter' => 'first_name, middle_name, last_name, email, gender',
                'status'    => 'close',
            ],
            'details'       => [
                'endpoint'  => getenv('APP_URL').'api/detail',
                'method'    => 'POST',
                'parameter' => 'token',
                'status'    => 'close',
            ],
        ],
        'copyright'     => '&copy; '.date('Y').' '.getenv('APP_NAME'),
    ],404);
});

Route::group([], function() {

    // api Location
    Route::group(['prefix' => '/currencies'], function () {
        Route::get('', 'ApiCurrency@index');
        Route::get('/{id}', 'ApiCurrency@show');
    });
});
