<?php

namespace App\Http\Controllers;
use App\Models\Barberman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarbermanUserController extends Controller
{
    public function show()
    {
        $barbermen = Barberman::orderBy('id', 'desc')->get();
        return view('mobileview.barbermenuser', compact('barbermen'));
    }
    
    public function detail($id)
    {
        $barberman = DB::table('barbermen')->where('id', $id)->first();
        return view('mobileview.detailbarbermen', ['barberman' => $barberman]);
    }
}