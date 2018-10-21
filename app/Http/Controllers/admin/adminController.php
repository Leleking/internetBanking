<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\Mail\verifyEmail;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\model\account;
use App\model\userDetail;
class adminController extends Controller
{
    public function addNewUser(Request $request){
        if($request->ajax()){
            $this->validate($request,[
                'name'=> 'required',
                'phone'=>'required',
                'email'=>'required|email',
                'gender'=>'required|integer',
                'address'=>'required',
                'city'=>'required',
                'zip'=>'required'
              ]);
              $length=13; //no maximum 
              srand((float)microtime() * 1000000); 
              $acct_num=''; 
              for($i=0;$i<$length;$i++) { 
              $acct_num .= rand(0,9); 
              } 
              $length=4; //no maximum 
              srand((float)microtime() * 1000000); 
              $pin=''; 
              for($i=0;$i<$length;$i++) { 
              $pin .= rand(0,9); 
              } 
              $password = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789') , 0 , 10 );
              $user = new User;
              $user->name = $request->name;
              $user->phone= $request->phone;
              $user->email= $request->email;
              $user->gender=$request->gender;
              $user->isAdmin=0;
              $user->password = Hash::make($password);
              $user->save();
              $thisUser = User::findOrFail($user->id);
              $detail = new userDetail;
              $detail->user_id = $thisUser->id;
              $detail->address = $request->address;
              $detail->city = $request->city;
              $detail->zip = $request->zip;
              $detail->picture = 1;
              $detail->save();
              $account = new account;
              $account->user_id = $thisUser->id;
              $account->type = 'SP';
              $account->balance = 0;
              $account->pin = $pin;
              $account->status=1;
              $account->acct_num = $acct_num;
              $account->save();
              $this->sendEmail($thisUser,$password);
              return response()->json(['response'=>'User Created']);
            }
            /*
            
echo $number; 
*/
    }
    public function sendEmail($thisUser,$password){
        Mail::to($thisUser['email'])->send(new verifyEmail($thisUser,$password));
    }

}
