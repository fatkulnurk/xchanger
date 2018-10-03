<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home/index');
});


// Router For Pages
Route::group(['prefix' => 'pages'], function()
{
    // Router Currency
    Route::get('/currency/add','CurrencyController@add');

    Route::get('/currency','CurrencyController@index');
});


/*
 * Ini adalah control controller dengan middleware
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
{
    Route::get('dashboard', function() {} );
});
*/

Route::get('/login', function () {
    return view('home/login');
});

Route::get('/register', function () {
    return view('home/register');
});

Route::get('/dashboard', function () {
    return view('dashboard/index');
});

Route::get('/dashboard/sell', function () {
    return view('dashboard/sell');
});

Route::get('/dashboard/buy', function () {
    return view('dashboard/buy');
});


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
