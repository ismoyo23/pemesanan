<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    protected $table = 'keuangan';
    protected $fillable = ['id','nama_transaksi', 'nominal_transaksi', 'tanggal_transaksi']; 
    public $timestamps = false;
}
