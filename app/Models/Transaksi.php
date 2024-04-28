<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'pelayanan_id',
        'user_id',
        'tanggal',
        'jam',
        'barberman_id',
        'status_pembayaran',
        'status_transaksi',
        'tanggalawal',
        'tanggalakhir',
        'total_pembayaran'
        ] ;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function pelayanan()
    {
        return $this->belongsTo(Pelayanan::class);
    }
    public function barberman()
    {
        return $this->belongsTo(Barberman::class, 'barberman_id');
    }
}