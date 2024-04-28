<?php

namespace App\Http\Controllers;

// use App\Http\Request;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class RegisterUserController extends Controller
{
    public function create(){
        return view('auth.registeruser');
    }
    
    public function store(Request $request){

        $validated = $request->validate([
            'name' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:8'],
            'telepon' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            // 'foto' => ['required'],
        ]);
        
        // if(!isset($request->name)){
        //     $nama = null;
        // }else{
        //     $nama = $request->name;
        // }
        
        // $file = $request->file("foto");
        // if ($file) {
        //     $name= $file->hashName();
        //     Storage::put("public/images/foto_user/", $file);
        // }else{
        //     $name = null;
        // }
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=> $request->password,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto' => 'default.jpg',
        ]);
        
        return redirect('loginuser')->with('successregister', 'Akun berhasil dibuat, silahkan login untuk melanjutkan ke aplikasi');
    }
        // return redirect('login')->with('success','Anda berhasil mendaftar akun, silahkan login untuk masuk ke aplikasi');
}