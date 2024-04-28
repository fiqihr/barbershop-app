<?php

namespace App\Http\Controllers;

use App\Models\Barberman;
use App\Models\Jam;
use App\Models\Pelayanan;
use App\Models\User;
use App\Models\Transaksi;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PemesananController extends Controller
{
    public function create(Request $request)
    {
        $users = User::get();
        $pelayanans = Pelayanan::get();
        $barbermen = Barberman::get();
        $transaksi = Transaksi::where('tanggal', $request->tanggal)->get();
        $jam = Jam::get();
        return view('mobileview.pemesanan', [
            'users' => $users,
            'pelayanans' => $pelayanans,
            'barbermen' => $barbermen,
            'transaksi' => $transaksi,
            'jam' => $jam,
            'tanggal' => $request->tanggal
        ]);
    }

    public function createSebelumJam(Request $request)
    {
        $tanggal = $request->input('tanggal');
        return view('mobileview.pemesanan_sebelum_jam',[
            'tanggal' => $tanggal,
        ]);
    }
    
    public function tanggal(Request $request)
    {
        $users = User::get();
        $pelayanans = Pelayanan::get();
        $barbermen = Barberman::get();
        $input = $request->input('tanggal');
        return view('mobileview.pemesanan',[
            'users' => $users,
            'pelayanans' => $pelayanans,
            'barbermen' => $barbermen,
            'tanggal' => $input,
        ]);
    }

    public function store(Request $request)
    {
        $layanan = Pelayanan::where('id',$request->pelayanan_id)->first();
        $harga = $layanan->harga;
        DB::table('transaksis')->insert([
            'user_id' => $request->user_id,
            'pelayanan_id' => $request->pelayanan_id,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'barberman_id' => $request->barberman_id,
            'total_pembayaran' => $harga,
        ]);
        return redirect('dashboard')->with('success', 'Pemesanan berhasil, silahkan pergi ke "Pesanan" untuk melihat pemesanan anda ');
    }
}