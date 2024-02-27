<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;
use App\Models\User;
use MongoDB\Driver\Session;
class UserController extends Controller
{
    //

    public  function login(Request $req){
        $user= User::where('email',$req->email)->get();
        if($user->count()>0){
            if(!Hash::check($req->password,$user[0]->password)){
                return "Email or password is wrong";

            }
            else{
                $req->session()->put('user',$user[0]);
                return redirect('/');
            }
        }
        else{
            return "Wrong username or password";
        }
    }
}
