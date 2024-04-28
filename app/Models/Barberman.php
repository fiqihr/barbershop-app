<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barberman extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'umur',
        'deskripsi',
        'foto',
    ];
    public function transaksi()
    {
        return $this->hasMany(Transaksi::class);
    }
}