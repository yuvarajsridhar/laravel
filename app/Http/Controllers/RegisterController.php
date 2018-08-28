<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Register;

class RegisterController extends Controller
{
    public function store(){
      //  echo 'test here';
    $data=Input::except(array('_token'));
     // var_dump($data);
    $rule=array(
        'firstname'=>'required',
        'lastname'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:6',
        'confirmpassword'=>'required|same:password'
     );
    $message=array(
        'confirmpassword.required'=>'the confirm password is required',
        'confirmpassword.min'=>'the confirm password must be atleat 6 characters',
        'confirmpassword.same'=>'the password and confirm password should be same',
        'fisrtname.required'=>'FirstName is required',
        'lastname.required'=>'lastname is required'
     );
    $validator=Validator::make($data,$rule,$message);

    if($validator->fails()){
        return Redirect::to('register')->witherrors($validator);
    }else{
        Register::formstore(Input::except(array('_token','confirmpassword')));
        return Redirect::to('register')->with('success','Successfully Registered');
    }
    }
}
