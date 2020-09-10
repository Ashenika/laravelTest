<?php
/**
 * Created by PhpStorm.
 * User: ACER
 * Date: 9/8/2020
 * Time: 7:00 PM
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller {

    public function loginView()
    {

        return view("login");
    }

    public function login(Request $request){

        $this->validate($request,[
            'mobile_no' => 'required'
        ]);

        if($request->mobile_no){
            $user = User::where('mobile_no','=',$request->mobile_no)->first();

            if($user){
                return redirect()->route('history', [$user]);
                //return redirect("history")->with(['user'=>$user]);
            }else{
                return view("login");
            }
        }
    }

    public function registerView(){
        return view("register");
    }

    public function register(Request $request){

        $this->validate($request,[
            'mobile_no' => 'required',
            'name'      => 'required'
        ]);

        $form = User::create([
            'mobile_no'     => $request->get('mobile_no'),
            'name'        => $request->get('name'),
        ]);

        $form->save();

        if($form){
            return redirect("login");
        }
    }



}