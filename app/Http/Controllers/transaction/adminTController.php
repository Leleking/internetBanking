<?php

namespace App\Http\Controllers\transaction;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use App\model\transaction;
use App\model\account;
class adminTController extends Controller
{
    public function creditAccount(Request $request){
        if($request->ajax()){
            $this->validate($request,[
                'acct_num'=> 'required',
                'amount'=>'required',
              ]);
              $transaction = transaction::orderBy('id','asc')->first();
              $tx_no =  $transaction->id + 1;
              $transaction = new transaction;
              $transaction->user_id = auth()->user()->id;
              $transaction->tx_no = $tx_no;
              $transaction->tx_type = 'credit';
              $transaction->amount = $request->amount;
              $transaction->description = $request->description;
              $transaction->to_acct = $request->acct_num;
              $transaction->status  = 1;
              $transaction->comments = 1;
              $transaction->save();
              $account = account::where('acct_num',$request->acct_num)->orderBy('id','asc')->first();
              $account = account::find($account->id);
              $account->balance =$account->balance + $request->amount;
              $account->save();
              return response()->json(['response'=>'Account with account No. '.$request->acct_num.' Credited']);   
          }
    }
    public function debitAccount(Request $request){
        if($request->ajax()){
            $this->validate($request,[
                'acct_num'=> 'required',
                'amount'=>'required',
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
              $transaction->status  = 1;
              $transaction->comments = 1;
              $transaction->save();
              $account = account::where('acct_num',$request->acct_num)->orderBy('id','asc')->first();
              $account = account::find($account->id);
              if($account->balance > $request->amount ){
              $account->balance =$account->balance- $request->amount;
              $account->save();
              return response()->json(['response'=>'Account with account No. '.$request->acct_num.' Debited']);   

              }else{
              return response()->json(['response'=>'Not enought funds to proceed']);   

              }
          }
    }
    public function approveRequest($id){
        $transaction = transaction::find($id);
        $amount = $transaction->amount;
        $sender = account::where('user_id',$transaction->user_id)->orderBy('id','asc')->first();
        $sender = account::find($sender->id);
        if($sender->balance > $amount){
        $transaction->status = 1;
        $transaction->save();
        $sender->balance = $sender->balance - $amount;
        $sender->save();
        $receiver = account::where('acct_num',$transaction->to_acct)->orderBy('id','asc')->first();
        $receiver = account::find($receiver->id);
        $receiver->balance = $receiver->balance + $amount;
        $receiver->save();
        $data['Message'] = 'Transaction Approved';
        }else{
            $data['Message'] = 'Not enough funds to approve';
        }
        
        return back()->with('data', $data);
    }
    public function cancelRequest($id){
        $data['Message'] = 'Transaction Approved';
        return back()->with('data', $data);
    }
}
