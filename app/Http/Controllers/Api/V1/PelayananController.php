<?php

namespace App\Http\Controllers\Api\V1;
use App\Filters\V1\PelayananFilter;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\V1\StorePelayananRequest;
use App\Http\Resources\PelayananCollection as ResourcesPelayananCollection;
use App\Models\Pelayanan;
use App\Http\Resources\V1\PelayananResource;
use App\Http\Resources\V1\PelayananCollection;
use App\Http\Resources\V1\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PelayananController extends Controller
{
    public function index(Request $request)
    {
        $filter = new PelayananFilter();
        $filterItems = $filter->transform($request);
        $includeTransaksis = $request->query('includeTransaksi');
        $pelayanans = Pelayanan::where($filterItems);
        if ($includeTransaksis) {
            $pelayanans = $pelayanans->with('transaksi');
        } 
        return new PelayananCollection($pelayanans->paginate()->appends($request->query()));
        
    }
    public function show(Pelayanan $pelayanan)
    {
        $includeTransaksis = request()->query('includeTransaksi');
        if ($includeTransaksis) {
            return new PelayananResource($pelayanan->loadMissing('transaksi'));
        }
        return new PelayananResource($pelayanan);
    }   

    public function store(StorePelayananRequest $request)
    {
        return new PelayananResource(Pelayanan::create($request->all()));
    }


    
    // public function getImage($path)
    // {
    //     $image = Storage::get($path);
    //     return response($image, 200)->header('Content-Type', Storage::getMimeType($path));
    // }

    
    

    // public function create()
    // {
    //     return view('pelayanans.create');
    // }
    
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'jenis' => ['required'],
    //         'harga' => ['required']
    //     ]);
    //     DB::table('pelayanans')->insert([
    //         'jenis' => $request->jenis,
    //         'harga' => $request->harga,
    //     ]);
    //     return redirect('pelayanans');
    // }
    
    // public function edit($id)
    // {
    //     $pelayanan= DB::table('pelayanans')->where('id', $id)->first();
    //     return view('pelayanans.edit', ['pelayanan' => $pelayanan]);
    // }
    
    // public function update(Request $request, $id)
    // {
    //     DB::table('pelayanans')->where('id', $id)->update([
    //         'jenis' =>$request->jenis,
    //         'harga' =>$request->harga,
    //     ]);
    //     return redirect('pelayanans');
    // }
    
    // public function destroy($id)
    // {
    //     DB::table('pelayanans')->where('id', $id)->delete();
    //     return back();
    // }
    
}