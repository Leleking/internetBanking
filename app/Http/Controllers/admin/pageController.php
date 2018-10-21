<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use App\model\transaction;
class pageController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
        $this->middleware('isStatus');
    }

    public function home(){
        if(auth()->user()->isAdmin()){
            return redirect('admin/transaction');
        }else{
            return redirect('user/fund/transfer');
        }
    }
    public function index(){
        return view('admin.dashboard');
    }
    public function debitAccount(){
        return view('admin.transaction.debitAccount');
    }
    public function pending(){
        $transaction = transaction::where('status',0)->get();
        return view('admin.transaction.pending')->with('transaction',$transaction);
    }
    public function viewAllTransactions(){
        $transaction = transaction::all();
        return view('admin.users.viewAllTransactions')->with('transaction',$transaction);
    }
    public function userDetails(){
        $user = User::all();
        return view('admin.users.userDetails')->with('user',$user);
    }
    public function transaction(){
        $debit = transaction::where('tx_type','debit')->where('status',1)->sum('amount');
        $credit = transaction::where('tx_type','credit')->where('status',1)->sum('amount');
        $pending = transaction::where('status',0)->sum('amount');
        return view('admin.transaction.index')->with('debit',$debit)->with('credit',$credit)->with('pending',$pending);
    }
    public function addCustomer(){
        return view('admin.users.addNewUser');
    }
}
