<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use App\Models\Blog;
use Symfony\Component\HttpFoundation\Session\Session;

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
        $req->session()->put('user',$req->input('name'));
        return redirect('/');

    }
    function userLogin(Request $req)
    {   
        $user=User::where('email',$req->input('email'))->get();
        if (Crypt::decrypt($user[0]->password)==$req->input('password')){
            
            $req->session()->put('email',$user[0]->email);
            $req->session()->flash('status'," Welcome ");
            return redirect('profile');
        }
    }

    function userBlog(Request $req)
    {
        $data= new Blog;
        $data->title=$req->title;
        $data->short_description=$req->short_description;
        $data->description=$req->description;
        $data->image=$req->bimgs->store('docs');
        $data->type=$req->types;
        $data->save();
        return redirect("profile");
    }
}
