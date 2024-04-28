<?php

namespace App\Http\Controllers\Api\V1;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\TransaksiResource;
use App\Http\Resources\V1\TransaksiCollection;
use App\Filters\V1\TransaksiFilter;
use App\Http\Resources\V1\UserCollection;
use App\Models\User;
use App\Models\Pelayanan;
use App\Models\Transaksi;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\V1\StoreTransaksiRequest;
use App\Http\Requests\V1\UpdateTransaksiRequest;


class TransaksiController extends Controller
{
    public function index(Request $request)
    {
        $filter = new TransaksiFilter();
        $filterItems = $filter->transform($request);

        $includeUsers = $request->query('includeUser');
        
        $transaksis = Transaksi::where($filterItems)->orderBy('tanggal', 'desc');

        if ($includeUsers) {
            $transaksis = $transaksis->with('user');
        }

        return new TransaksiCollection($transaksis->paginate()->appends($request->query()));
        
    }
    public function show(Transaksi $transaksi)
    {
        return new TransaksiResource($transaksi);
    }

    public function store(Request $request)
    {
        $dataHari = Transaksi::where('tanggal', $request->tanggal)->where('jam', $request->jam)->first();
        
        if ($dataHari != null){
            return response()->json([
                'message' => 'Jadwal layanan di tanggal ' .$request->tanggal. ' dan jam '.$request->jam. ' sudah ada, Coba jam lainnya'
            ]);
        }
        $layanan = Pelayanan::where('id', $request->pelayanan_id)->first();
        $harga = $layanan->harga;
        $transaksiJadi = Transaksi::create([
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
        return response($transaksiJadi);
    }

    public function update(UpdateTransaksiRequest $request, Transaksi $transaksi)
    {
        // return response('test');
        
        $transaksi->update($request->all());
    }

    // public function order(){
        
    //     \Midtrans\Config::$serverKey=config('midtrans.server_key') ; // Set to Development/Sandbox Environment (default). 
        
    //     // Set to true forProduction Environment (accept real transaction). 
    //     \Midtrans\Config::$isProduction=false; 
        
    //     // Set sanitization on(default)
    //     \Midtrans\Config::$isSanitized=true; 
        
    //     // Set 3DS transaction for credit card to true
    //     \Midtrans\Config::$is3ds=true;
        
    //     $params=array( 'transaction_details'=> array(
    //         'order_id' => rand(),
    //         'gross_amount' => 10000,
    //     ),
    //         'customer_details' => array(
    //         'first_name' => 'budi',
    //         'last_name' => 'pratama',
    //         'email' => 'budi.pra@example.com',
    //         'phone' => '08111222333',
    //         ),
    //     );
    
    //     $snapToken = \Midtrans\Snap::getSnapToken($params);
    // }

    // public function create()
    // {
    //     $users = User::get();
    //     $pelayanans = Pelayanan::get();
    //     return view('transaksis.newtransaksi', [
    //         'users' => $users,
    //         'pelayanans' => $pelayanans,
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     DB::table('transaksis')->insert([
    //         'id' => $request->id,
    //         'user_id' => $request->user_id,
    //         'pelayanan_id' => $request->pelayanan_id,
    //         'tanggal' => $request->tanggal,
    //         'jam' => $request->jam,
    //         'status_pembayaran' => $request->status_pembayaran,
    //         'total_pembayaran' => $request->pelayanan_harga,
    //     ]);
    //     return redirect('transaksis');
    // }

    // public function edit($id)
    // {
    //     $users = User::get();
    //     $pelayanans = Pelayanan::get();
    //     $transaksi = DB::table('transaksis')->where('id', $id)->first();
    //     return view('transaksis.edit', [
    //         'transaksi' => $transaksi,
    //         'users' => $users,
    //         'pelayanans' => $pelayanans,
    //     ]);
    // }

    // public function update(Request $request, $id)
    // {
    //     DB::table('transaksis')->where('id', $id)->update([
    //         'id' => $request->id,
    //         'user_id' => $request->user_id,
    //         'pelayanan_id' => $request->pelayanan_id,
    //         'tanggal' => $request->tanggal,
    //         'jam' => $request->jam,
    //         'status_pembayaran' => $request->status_pembayaran,
    //         'total_pembayaran' => $request->total_pembayaran,
    //     ]);
    //     return redirect('transaksis');
    // }
}