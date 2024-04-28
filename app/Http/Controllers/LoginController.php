<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($attributes)) {
            return redirect(RouteServiceProvider::HOME)->with('successlogin', 'Selamat, anda berhasil login!');
        }
        throw ValidationException::withMessages([
            'email' => 'Pengguna email tidak ditemukan',
        ]);
    }
}




        // $request->validate([
        //     'email' => ['required','email'],
        //     'password' => ['required'],
        // ]);
        // $user = User::whereEmail($request->email)->first();
        // if ($user) {
        //     if (Hash::check($request->password, $user->password)) {
        //         Auth::login($user);
        //         return redirect('users') ->with('success', 'berhasil');
        //     }
        //     throw ValidationException::withMessages([
        //         'email' => 'Your provide credentials does not match our records.',
        //     ]);
        // }