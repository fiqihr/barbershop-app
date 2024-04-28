<?php

namespace App\Http\Controllers;

use App\Providers\UserServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginUserController extends Controller
{
    public function create(){
        return view('auth.loginuser') ;
    }
    public function store(Request $request){
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($attributes)) {
            return redirect('/dashboard')->with('successlogin', 'Selamat, anda berhasil login!');
        }
        throw ValidationException::withMessages([
            'email' => 'Pengguna email tidak ditemukan',
        ]);
    }
}