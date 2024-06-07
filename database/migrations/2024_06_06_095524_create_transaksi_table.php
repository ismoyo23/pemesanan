<?php

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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->unsignedBigInteger('id_pelanggan'); // Foreign key
            $table->integer('tinggi_badan_cm');
            $table->integer('berat_badan_kg');
            $table->integer('usia_tahun');
            $table->integer('usia_bulan');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->enum('layanan', ['Outlet', 'Homecare']);
            $table->string('pilih_layanan');
            $table->string('kategori');
            $table->decimal('harga', 10, 2);
            $table->string('terapis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
};
