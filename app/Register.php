<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
class Register extends Model
{
    protected $table='register_users';
    public static function formstore($data){
        $firstname=Input::get('firstname');
        echo $firstname;
        $lastname=Input::get('lastname');
        $email=Input::get('email');
        $password=Input::get('password');
        $users=new Register();
        $users->firstname=$firstname;
        $users->lastname=$lastname;
        $users->email=$email;
        $users->password=$password;
        echo $users->password;

    }
}
