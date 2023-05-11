<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;

class UserAuth extends Controller
{
    //
    function userSignup(Request $req)
    {
        $data= new User;
        $data->name=$req->name;
        $data->email=$req->email;
        $data->password=Crypt::encrypt($req->input('password'));
        $data->save();
        $req->session()->put('email',$req->input('email'));
        return redirect('/');

    }
    function userLogin(Request $req)
    {
        $user=User::where('email',$req->input('email'))->get();
        // return Crypt::decrypt($user[0]->password)==$req->input('email');
        if (Crypt::decrypt($user[0]->password)==$req->input('password')){
            
            $req->session()->put('email',$user[0]->email);
            return redirect('profile');
        }
    }
}
