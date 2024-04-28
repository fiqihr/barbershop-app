<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    public function index()
    {        
        $transaksis = Transaksi::orderBy('id', 'desc')->get();
        return view('mobileview.pesanan', compact('transaksis'));
    }
    
    public function destroy($id)
    {
        DB::table('transaksis')->where('id', $id)->delete();
        return redirect('pesanan/pesananku/{id}')->with('batal', 'Pemesanan dibatalkan, silahkan melakukan pemesanan lagi');
    }

    public function pesananku($id)
    {
        $transaksi = Transaksi::where('user_id',$id)->orderBy('tanggal', 'desc')->get();
        return view('mobileview.pesanan', compact('transaksi'));
    }
}