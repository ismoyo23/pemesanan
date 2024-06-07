<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transaksi';
    protected $fillable = [
        'id',
        'tanggal',
        'id_pelanggan',
        'tinggi_badan_cm',
        'berat_badan_kg',
        'usia_tahun',
        'usia_bulan',
        'jenis_kelamin',
        'layanan',
        'pilih_layanan',
        'kategori',
        'harga',
        'terapis',
    ];
    public $timestamps = false;
}
