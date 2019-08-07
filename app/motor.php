<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    protected $fillable = ['motor_kode', 'motor_merk', 'motor_type', 'motor_warna_pilihan', 'motor_harga', 'motor_gambar'];

    public $timestamps = true;
}
