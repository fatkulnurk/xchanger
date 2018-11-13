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

//Route::get('/', function () {
//    return view('home/index');
//});


Route::get('/','PagesController@homepage')->name('homepage');
Route::post('/test','PagesController@homepageCount')->name('homepagecount');


/*
 * -------------------------------------------------------
 * Router For Pages Nologin
 * -------------------------------------------------------
 * Di Router ini nantinya untuk
 *
 */
Route::group(['prefix' => 'pages'], function()
{
    Route::get('/rates','PagesController@rates');

    Route::get('/currency','PagesController@currency');

    Route::get('/fee','PagesController@fee');

    Route::get('/review','PagesController@review');

    Route::get('/about',function (){
        return view('home.pages.about');
    });

    Route::get('/tos',function (){
        return view('home.pages.tos');
    });

    Route::get('/privacy',function (){
        return view('home.pages.privacy');
    });

    Route::get('/contact','PagesController@contact');
});


/*
 * -------------------------------------------------------
 * ROUTER DASHBOARD
 * -------------------------------------------------------
 * Di Router ini nantinya untuk
 * Route::group(['prefix' => 'dashboard'], function()
 *
 */
Route::group(['middleware' => 'auth','prefix' => 'dashboard'], function()
{

    Route::get('/', 'Dashboard@index');

    Route::group(['prefix' => 'sell'], function()
    {
        Route::get('/','DashboardSellController@create')->name('sell');
        Route::post('/','DashboardSellController@store')->name('selladd');

        Route::get('/list','DashboardSellController@index')->name('selllist');

        Route::get('/list/{id}','DashboardSellController@show');
    });



    Route::group(['prefix' => 'buy'], function()
    {
        Route::get('/','DashboardBuyController@create')->name('buy');
        Route::post('/','DashboardBuyController@store')->name('buyadd');

        Route::get('/list','DashboardBuyController@index')->name('buylist');

        Route::get('/list/{id}','DashboardBuyController@show');
    });



    Route::group(['prefix' => 'bank'], function()
    {
        Route::get('/','DashboardBankController@create')->name('bank');
        Route::post('/','DashboardBankController@store')->name('bankadd');

        Route::get('/list','DashboardBankController@index')->name('banklist');

        Route::get('/list/{id}','DashboardBankController@show');
    });



    Route::group(['prefix' => 'account'], function()
    {
        Route::get('/','DashboardAccountController@index')->name('account');
        Route::post('/','DashboardAccountController@update')->name('changeaccount');

        Route::get('/pin','DashboardAccountController@pin')->name('pin');
        Route::post('/pin','DashboardAccountController@pinUpdate')->name('changepin');

        Route::get('/password','DashboardAccountController@password')->name('password');
        Route::post('/password','DashboardAccountController@changepassword')->name('changepassword');

        Route::get('/logout','DashboardAccountController@logout');
    });


    // DASHBOARD ADMIN
    Route::group(['middleware' => 'admin_security','prefix' => 'admin'], function()
    {
        Route::get('/',function (){
            return view('dashboard.admin.index');
        });

        Route::resource('currency', 'AdminCurrencyController');

        Route::resource('typetransaction', 'AdminTypeTransactionController');

        Route::resource('statustransaction', 'AdminStatusTransactionController');

        Route::resource('userrole', 'AdminUserRoleController');

        Route::resource('user', 'AdminUserController');

//        Route::resource('transaction', 'AdminTransactionController');

        Route::group(['prefix' => 'transaction'], function()
        {
            Route::get('/','AdminTransactionController@index')->name('transaction.index');

            Route::get('/{id}','AdminTransactionController@show')->name('transaction.show');

            Route::put('/{id}/succcess','AdminTransactionController@isSuccess')->name('issuccess');
            Route::put('/{id}/fraud','AdminTransactionController@isFraud')->name('isfraud');
            Route::put('/{id}/waiting','AdminTransactionController@isWaiting')->name('iswaiting');
            Route::put('/{id}/cancel','AdminTransactionController@isCancel')->name('iscancel');
            Route::put('/{id}/failed','AdminTransactionController@isFailed')->name('isfailed');
        });


    });

});


Route::get('/home', 'HomeController@index')->name('home');

// router auth
Auth::routes();

