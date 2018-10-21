<?php

namespace App\Http\Controllers\user;
use App\model\transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pageController extends Controller
{
    public function index(){
        return view('user.dash');
    }
    public function profile(){
        return view('user.profile.index');
    }
    public function fundTransfer(){
        $debit = transaction::where('user_id',auth()->user()->id)->where('status',1)->sum('amount');
        $credit = transaction::where('to_acct',auth()->user()->account->acct_num)->where('status',1)->sum('amount');
        return view('user.transaction.index')->with('debit',$debit)->with('credit',$credit);
    }
    public function accountDetail(){
        return view('user.account.details');
    }
    public function accountSummary(){
        $transaction = transaction::all();
        return view('user.account.summary');
    }
    public function changePassword(){
        return view('auth.changePassword');
    }
}
