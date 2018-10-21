<?php

namespace App\Http\Controllers\transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\model\account;
use App\model\transaction;
class addTController extends Controller
{
    public function viewTransactions(){
        $dTransaction = transaction::where('user_id',auth()->user()->id)->get();
        $cTransaction = transaction::where('to_acct',auth()->user()->account->acct_num)->get();
        return view('user.transaction.viewTransactions')->with('cTransaction',$cTransaction)->with('dTransaction',$dTransaction);
    }
    public function sendTransfer(Request $request){
        if($request->ajax()){
            $this->validate($request,[
                'acct_num'=> 'required',
                'amount'=>'required',
                'r_name'=>'required'
              ]);
              $transaction = transaction::orderBy('id','asc')->first();
              $tx_no =  $transaction->id + 1;
              $transaction = new transaction;
              $transaction->user_id = auth()->user()->id;
              $transaction->tx_no = $tx_no;
              $transaction->tx_type = 'debit';
              $transaction->amount = $request->amount;
              $transaction->description = $request->description;
              $transaction->to_acct = $request->acct_num;
              $transaction->status  = 0;
              $transaction->comments = 1;
              $transaction->save();
              return response()->json(['response'=>'Transfer Complete. Please await approval']);   
          }
    }
    public function getReceiverName(Request $request){
        if($request->ajax()){
              $receiver = account::where('acct_num',$request->acct_num)->orderBy('id','desc')->first();
              if($receiver['acct_num']){
                return response()->json(['response'=>$receiver->user['name']]);
              }else{
                return response()->json(['error'=>'Account Not found']);
              }
          }
    }
}
