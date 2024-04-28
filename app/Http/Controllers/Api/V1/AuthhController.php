<?php

namespace App\Http\Controllers\Api\V1;

use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Support\Facades\Hash;
use App\Models\User;

class AuthhController extends Controller
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
                $token = $user->createToken('basic-token');
                
                return [
                'token' => $token->plainTextToken
                ];
            }
           }   // dd('here');
        }    
    }
}