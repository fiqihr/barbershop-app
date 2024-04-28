<?php

namespace App\Http\Controllers;

use App\Models\Barberman;
use App\Models\User;
use App\Models\Pelayanan;
use App\Models\Transaksi;
use App\Models\Jam;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class TransaksiController extends Controller
{
    
    public function index()
    {
        $transaksis = Transaksi::orderBy('id', 'desc')->get();
        return view('transaksis.index', compact('transaksis'));
    }

    public function create(Request $request)
    {
        
        $users = User::get();
        $pelayanans = Pelayanan::get();
        $barbermen = Barberman::get();
        return view('transaksis.newtransaksi', [
            'users' => $users,
            'pelayanans' => $pelayanans,
            'barbermen' => $barbermen,
        ]);
    }

    public function store(Request $request)
    {

        
        $layanan = Pelayanan::where('id', $request->pelayanan_id)->first();
        $harga = $layanan->harga;
        DB::table('transaksis')->insert([
            'id' => $request->id,
            'user_id' => $request->user_id,
            'pelayanan_id' => $request->pelayanan_id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'barberman_id' => $request->barberman_id,
            'status_pembayaran' => $request->status_pembayaran,
            'status_transaksi' => $request->status_transaksi,
            'total_pembayaran' => $harga,
        ]);
        return redirect('transaksis');
    }
    
    public function edit($id)
    {
        $users = User::get();
        $pelayanans = Pelayanan::get();
        $barbermen = Barberman::get();
        $transaksi = DB::table('transaksis')->where('id', $id)->first();
        return view('transaksis.edit', [
            'transaksi' => $transaksi,
            'users' => $users,
            'pelayanans' => $pelayanans,
            'barbermen' => $barbermen,
        ]);
    }

    public function update(Request $request, $id)
    {
        DB::table('transaksis')->where('id', $id)->update([
            'status_pembayaran' => $request->status_pembayaran,
            'status_transaksi' => $request->status_transaksi,
        ]);
        return redirect('transaksis');
    }

    public function laporan(Request $request)
    {
        $from = $request->input('tanggalawal');
        $to = $request->input('tanggalakhir');
        $laporan = Transaksi::where('status_pembayaran','Lunas')->whereBetween('tanggal', [$from, $to])->get();
        return view('transaksis.laporan',[
            'laporan' => $laporan,
            'periode' => $from. " - " .$to,
            ]);
    }
}