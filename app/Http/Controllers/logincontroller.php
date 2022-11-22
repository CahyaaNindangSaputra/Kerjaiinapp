<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Providers\RouteServiceProvider;

class logincontroller extends Controller
{
    public function login()
    {
        if ($user = Auth::user()){
            if($user->role == 'admin'){
                return redirect()->intended('adminn');
            }elseif($user->role == 'perusahan'){
                return redirect()->intended('registerperusahan');
            }elseif($user->role == 'pelamar'){
                return redirect()->intended('registerpelamar');
            }
        }
        return view('auth.login');
        // if (Auth::check()){
        //     return redirect('registerperusahan');
        // }else{
        //     return view('auth.login');
        // }
    }
    public function actionlogin(Request $request)
    {
        // $data = [
        //     'email' => $request->input('email'),
        //     'password' => $request->input('password')
        // ];
        // if (Auth::Attempt($data)){
        //     return redirect('registerperusahan');
        // }else{
        //     Session::flash('error', 'salah');
        //     return redirect('login');
        // }
        request()->validate(
            [
                'email'=>'required',
                'password'=>'required',

            ]);

            $kredensil = $request->only('email','password');

            if(Auth::attempt($kredensil)){
                $user = Auth::user();
                if($user->role == 'admin'){
                    return redirect()->intended('adminn');
                }elseif($user->role == 'perusahaan'){
                    return redirect()->intended('registerperusahan');
                }elseif($user->role == 'pelamar'){
                    return redirect()->intended('registerpelamar');
                }
                return redirect()->intended('/');
            }
            Session::flash('error', 'errorr');
            return redirect('login');
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
