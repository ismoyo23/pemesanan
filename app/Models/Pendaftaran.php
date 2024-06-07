<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $table = 'pendaftaran';
    protected $fillable = ['id_pendaftaran','nama_bunda', 'nama_ananda', 'no_hp', 'alamat']; 
    public $timestamps = false;
}
