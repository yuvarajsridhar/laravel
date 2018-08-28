<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public static function getdata(){
        //echo "dhgvhds";
        $data=Input::except(array('_token'));
        //var_dump($data);
         $rule=array(
            'email'=>'required|email',
            'password'=>'required|min:6'
         );
         $message=array(
             'email.required'=>'emaill id is required',
             'password.required'=>'password is required'
         );
         $validator=Validator::make($data,$rule,$message);
         if($validator->fails()){
            return Redirect::to('signin')->witherrors($validator);
        }else{
            //$data=Input::except(array('_token'));
            $userdata=array(
                'email'=>Input::get('email'),
                'password'=>Input::get('password')
            );
            if(Auth::attempt($userdata)){
                return Redirect::to('/');
            }else{
                return Redirect::to('signin')->with('notsuccess','username or password is wrong');
            }
            //return Redirect::to('login')->with('success','Successfully Logged In');
        }
    }
}
