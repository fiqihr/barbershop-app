<?php

namespace App\Http\Controllers;

use App\Models\Barberman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class BarbermanController extends Controller
{
    public function index()
    {
        $barbermen = Barberman::orderBy('id', 'desc')->get();
        return view('barbermen.index', compact('barbermen'));
    }

    public function create()
    {
        return view('barbermen.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => ['required'],
            'foto' => ['required'],
            'umur' => ['required'],
            'deskripsi' => ['required'],
        ]);

        if(!isset($request->nama)){
            $nama = null;
        }else{
            $nama = $request->nama;
        }

        $file = $request->file("foto");
        if ($file) {
            $name = $file->hashName();
            Storage::put("public/images/foto_barberman/", $file);
        }else{
            $name = null;
        }

        Barberman::create([
            'nama' => $request->nama,
            'foto' => $name,
            'umur' => $request->umur,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/barbermen');
    }
    
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'nama' => ['required'],
    //         'foto' => ['required'],
    //         'umur' => ['required'],
    //         'deskripsi' => ['required'],
    //     ]);
    //     $data = DB::table('barbermen')->insert([
    //         'nama' => $request->nama,
    //         'foto' => $request->foto,
    //         'umur' => $request->umur,
    //         'deskripsi' => $request->deskripsi,
    //     ]);

    //     if ($request->hasFile('foto')) {
    //         $request->file('foto')->move('images/', $request->file('foto')->getClientOriginalName());
    //         /**
    //          * 
    //          * @var Data $data
    //          */
    //         $data->foto = $request->file('foto')->getClientOriginalName();
    //         $data->save();
    //     }

    //     return redirect('barbermen');
    // }

    public function edit($id)
    {
        $barberman = DB::table('barbermen')->where('id', $id)->first();
        return view('barbermen.edit', ['barberman' => $barberman]);
    }

    public function update(Request $request, $id)
    {
        if(!isset($request->nama)){
            $nama = null;
        }else{
            $nama = $request->nama;
        }

        $file = $request->file("foto");
        if ($file) {
            $name = $file->hashName();
            Storage::put("public/images/foto_barberman/", $file);
        }else{
            $name = null;
        }
        DB::table('barbermen')->where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'deskripsi' => $request->deskripsi,
            'foto' => $name,
        ]);
        return redirect('barbermen');
    }

    public function destroy($id)
    {
        DB::table('barbermen')->where('id', $id)->delete();
        return back();
    }
}