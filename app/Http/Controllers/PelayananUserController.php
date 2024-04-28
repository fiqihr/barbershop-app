<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelayananUserController extends Controller
{
    public function index(){
        $pelayanans = Pelayanan::orderBy('id', 'desc')->get();
        return view('mobileview.pelayananuser', compact('pelayanans'));
    }
    public function detail($id)
    {
        $pelayanan = DB::table('pelayanans')->where('id', $id)->first();
        return view('mobileview.detailpelayanan', ['pelayanan' => $pelayanan]);
    }
}