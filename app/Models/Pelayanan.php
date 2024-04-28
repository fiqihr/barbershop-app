<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'jenis',
        'harga',
        'deskripsi',
        'foto',
    ];
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}