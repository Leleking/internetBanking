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

Route::get('/','admin\pageController@home');
Route::get('/admin/login/{verifyToken}','admin\pageController@adminLogin');
Auth::routes();
Route::post('loginUser','authenticate\loginUserController@loginUser');
Route::group(['prefix'=>'admin','middleware'=>['isStatus','auth','isAdmin']],function(){
    Route::get('dashboard','admin\pageController@index');
    Route::get('debitAccount','admin\pageController@debitAccount');
    Route::get('userDetails','admin\pageController@userDetails');
    Route::get('showUserDetails/{id}','admin\userDetailsController@showUserDetails');
    Route::get('transaction','admin\pageController@transaction')->name('admin');
    Route::get('add/customer','admin\pageController@addCustomer');
    Route::get('viewAllTransactions','admin\pageController@viewAllTransactions');
    Route::post('fund/creditAccount','transaction\adminTController@creditAccount');
    Route::post('fund/debitAccount','transaction\adminTController@debitAccount');
    Route::get('transaction/pending','admin\pageController@pending');
    Route::post('addNewUser','admin\adminController@addNewUser');
    Route::get('showUserTransaction/{id}','admin\userDetailsController@showUserTransaction');
    Route::get('request/approve/{id}','transaction\adminTController@approveRequest');
    Route::get('request/cancel/{id}','transaction\adminTController@cancelRequest');
});
Route::group(['prefix'=>'user','middleware'=>['isStatus','auth']],function(){
    Route::get('dashboard','user\pageController@index');
    Route::get('profile','user\pageController@profile');
    Route::get('fund/transfer','user\pageController@fundTransfer')->name('user');
    Route::post('fund/transfer/send','transaction\addTController@sendTransfer');
    Route::post('fund/transaction/getReceiverName','transaction\addTcontroller@getReceiverName');
    Route::get('account/detail','user\pageController@accountDetail');
    Route::get('account/summary','user\pageController@accountSummary');
    Route::get('fund/viewTransactions','transaction\addTcontroller@viewTransactions');
    Route::get('changePassword','user\pageController@changePassword');
    Route::post('/auth/password/changePassword','changePasswordController@postChangePassword');

    //Route::get('profile/{id}','user\userDetailsController@showUserDetails');
    //Route::get('transaction','admin\pageController@transaction');
});
Route::get('logout','Auth\LoginController@logout');


