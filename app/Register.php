<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    protected $table='register_users';
    public static function formstore($data){
        $firstname=Input::get('firstname');
        echo $firstname;
        $lastname=Input::get('lastname');
        $email=Input::get('email');
        $password=Hash::make(Input::get('password'));
        $users=new Register();
        $users->firstname=$firstname;
        $users->lastname=$lastname;
        $users->email=$email;
        $users->password=$password;
        echo $users->password;
        $users->save();

    }
}
