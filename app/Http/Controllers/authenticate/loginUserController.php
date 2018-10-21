<?php

namespace App\Http\Controllers\authenticate;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\model\account;
class loginUserController extends Controller
{
    public function loginUser(Request $request){
        
        $validatedData = $request->validate([
            'acct_num' => 'required|string|min:6|max:16',
            'pin' => 'required|string|min:3|max:6',
            'password' => 'required|min:6',
        ],[
            'acct_num.required' => 'Account number is required',
            'pin.min' => 'Pin needs to have at least 4 characters',
            'password.required' => 'Password is required',
            'password.min' => 'Password needs to have at least 6 characters',
            'pin.integer' => 'Account number can only be integer'
        ]);
        
        $account = account::where('acct_num',$request->acct_num)->where('pin',$request->pin)->orderBy('id','desc')->first();
       if($account->user_id){
           $user = User::find($account->user_id);
        if(\Hash::check($request->input('password'), $user->password))
        {
          $user_id = $user->id;
          Auth::loginUsingId($user_id,true);
          $nextRoute = auth()->user()->isAdmin() ? '/admin/transaction' :'/user/fund/transfer';
          return redirect($nextRoute);
        }
        else{
            $data['err'] = 'Credentials could not be matched';
            return redirect()->back()->with('data', $data);
        }
       }else{
           echo "account not found";
       }
        //Auth::loginUsingId(1,true);
        
    }
}
