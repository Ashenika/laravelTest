<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 9/10/2020
 * Time: 10:59 AM
 */

namespace App\Http\Controllers;


use App\Account;
use App\Transaction;
use App\User;
use Illuminate\Http\Request;

class AccountController extends Controller {

    public function historyView($user_id){

       // return $user;

        $account_details = Account::where('user_id','=',$user_id)->first();

        $transactions    = Transaction::with('sender')->where('user_id','=',$user_id)->get();
        //return $transactions;

        return view("history")->with([
            'account_details'=>$account_details,
            'transactions'   =>$transactions
        ]);
    }

    public function transactionView(){

        return view("transaction");
    }

    public function transaction(Request $request){

        $this->validate($request,[
            'mobile_no' => 'required'
        ]);

        if($request->mobile_no){
            $sender = User::where('mobile_no','=',$request->mobile_no)->first();
            $user   = User::where('mobile_no','=',$request->user_mobile_no)->first();
           // return $user;
            if($sender){
                $data = Transaction::create([
                    'user_id'          => $user->id,
                    'sender_id'        => $sender->id,
                    'amount'           => $request->amount,

                ]);
                $data->save();

                if($data){
                    $total_transactions = Transaction::where('user_id','=',$user->id)->sum('amount')->get();
                    $account = Account::where('user_id','=',$user->id)->first();
                    $account->balance = $account->amount - $total_transactions;
                }

                //return $user;
                return redirect()->route('history', [$user]);
                //return redirect("history")->with(['user'=>$user]);
            }else{
                return "Mobile Number Not Registered";
            }

        }
    }



}