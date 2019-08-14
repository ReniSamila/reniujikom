<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kriditpaket extends Model
{
    protected $fillable = ['kode', 'harga_cash', 'uang_muka', 'jumlah_cicilan', 'paket_bunga', 'nilai_cicilan'];

    public $timestamps = true;
}
