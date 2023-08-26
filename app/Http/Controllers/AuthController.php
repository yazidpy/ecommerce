<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\client\FormLoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\intended;
use App\Models\User;


class AuthController extends Controller
{
    //
    public function login(){
        // User::create([
        //     // 'name'=>'john',
        //     // 'email'=>'email@gmail.com',
        //     // 'password'=>Hash::make('0000')
        // ]);
        return view('client.login');
    }
    public function dologin(FormLoginRequest $request){
        $data = $request->validated();
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect()->intended(route('auth.login'));
        }
        return to_route('auth.login')->with('error','Adresse email ou mot de passe est incorrect');
        // Auth::loginUsingId();
    }
    public function logout(){
        Auth::logout();
        return to_route('auth.login');
    }
}
