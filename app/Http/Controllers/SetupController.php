<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


class SetupController extends Controller
{
    public function index(){
            {
                $credentials = [
                'email' => 'user1@gmail.com',
                'password' => 'password'
                ];
            
                if (!Auth::attempt($credentials)) {
                $user = new \App\Models\User();
            
                $user -> name = 'user1';
                $user -> email = $credentials['email'];
                $user -> password = Hash::make($credentials['password']);
            
                $user -> save();
            
                if (Auth::attempt($credentials)){
                $user = Auth::user();
                // dd($user);
            
                // $adminToken = $user->createToken('admin-token',['create','update','delete']);
                // $updateToken = $user->createToken('update-token',['create','update']);
                $token = $user->createToken('basic-token')->plainTextToken;
                
                return [
                'token' => $token,
                ];
            }
           }   // dd('here');
        }  
    }
}