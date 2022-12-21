<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostLogin;
use App\Http\Requests\PostRegister;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('admin.resgister.register');
    }
    public function postRegister(PostRegister $req)
    {
        $req->validated();
        $req->password = Hash::make($req->password);
        $req->merge(['password'=>$req->password]);
        User::create($req->all());
        return redirect()->route('login');
    }
    public function login()
    {
        return view('admin.resgister.login');
    }
    public function PostLogin(Request $req)
    {
        // $req->validated();
        Auth::attempt(['email' => $req->email, 'password' => $req->password]);
        return redirect()->route('home');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
