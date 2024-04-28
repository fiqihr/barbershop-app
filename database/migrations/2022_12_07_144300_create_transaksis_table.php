<?php

use App\Models\Pelayanan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedInteger('pelayanan_id');
            $table->unsignedInteger('user_id');
            $table->date('tanggal');
            $table->string('jam');
            $table->unsignedInteger('barberman_id');
            $table->string('status_pembayaran')->nullable()->default('Belum Lunas');
            $table->string('status_transaksi')->nullable()->default('Menunggu Pembayaran');
            $table->integer('total_pembayaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
};