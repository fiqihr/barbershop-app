<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelayananController extends Controller
{
    public function index()
    {
        return view('pelayanans.index',[
            'pelayanans' => DB::table('pelayanans')->orderBy('id', 'desc')->get(),
        ]);
    }
    
    public function create()
    {
        return view('pelayanans.create');
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'jenis' => ['required'],
            'harga' => ['required','string'],
            'deskripsi' => ['required'],
            'foto' => ['required'],
        ]);
        
        if(!isset($request->jenis)){
            $nama = null;
        } else {
            $nama = $request->jenis;
        }

        $file = $request->file("foto");
        if ($file) {
            $name = $file->hashName();
            Storage::put("public/images/foto_pelayanan/", $file);
        }else{
            $name = null;
        }
        
        Pelayanan::create([
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'foto' => $name,
        ]);
        return redirect('/pelayanans');
    }
    
    public function edit($id)
    {
        $pelayanan= DB::table('pelayanans')->where('id', $id)->first();
        return view('pelayanans.edit', ['pelayanan' => $pelayanan]);
    }
    
    public function update(Request $request, $id)
    {
        if(!isset($request->jenis)){
            $nama = null;
        } else {
            $nama = $request->jenis;
        }

        $file = $request->file("foto");
        if ($file) {
            $name = $file->hashName();
            Storage::put("public/images/foto_pelayanan/", $file);
        }else{
            $name = null;
        }
        
        DB::table('pelayanans')->where('id', $id)->update([
            'jenis' =>$request->jenis,
            'harga' =>$request->harga,
            'deskripsi' =>$request->deskripsi,
            'foto' => $name,
        ]);
        return redirect('pelayanans');
    }
    
    public function destroy($id)
    {
        DB::table('pelayanans')->where('id', $id)->delete();
        return back();
    }
    
}