<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class motor extends Model
{
    protected $fillable = ['kode', 'merk', 'type', 'warna', 'harga', 'gambar'];

    public $timestamps = true;
}
