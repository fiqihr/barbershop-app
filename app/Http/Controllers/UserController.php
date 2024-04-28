<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => DB::table('users')->orderBy('id', 'desc')->get(),
        ]);
    }

    public function create()
    {
        return view('users.createuser');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'min:6'],
            'telepon' => ['required', 'string'],
            'alamat' => ['required', 'string'],
            'jenis_kelamin' => ['required', 'string'],
            'role' => ['required', 'string'],
            'foto' => ['required'],
        ]);
        
        // if(!isset($request->nama)){
        //     $nama = null;
        // } else {
        //     $nama = $request->nama;
        // }

        // $file = $request->file("foto");
        // if ($file){
        //     $name = $file->hashName();
        //     Storage::put("public/images/foto_user/", $file);
        // } else {
        //     $name = null;
        // }
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role,
            'foto' => 'default.jpg',
        ]);
        return redirect('users')->with('success', 'User baru berhasil ditambahkan');
    }

        public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('users.edituser', ['user' => $user]);
    }
    
    public function update(Request $request, $id)
    {      
        if(!isset($request->nama)){
            $nama = null;
        } else {
            $nama = $request->nama;
        }

        $file = $request->file("foto");
        if ($file){
            $name = $file->hashName();
            Storage::put("public/images/foto_user/", $file);
        } else {
            $name = null;
        }
        DB::table('users')->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'role' => $request->role,
            'foto' => $name,
        ]);
        return redirect('users');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return back();
    }
    

}