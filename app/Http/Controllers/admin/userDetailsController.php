<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\model\transaction;
class userDetailsController extends Controller
{
    public function showUserDetails($id){
        $user = User::find($id);
        return view('admin.users.showUserDetail')->with('user',$user);
    }
    //Route::get('showUserDetails/{id}','admin\userDetailsController@showUserDetails');
    public function showUserTransaction($id){
        $transaction = transaction::where('user_id',$id)->get();
        return view('admin.users.viewUserTransaction')->with('transaction',$transaction);
    }
}
