<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kriditpaket extends Model
{
    protected $fillable = ['kode_paket', 'harga_paket_cash', 'paket_uang_muka', 'paket_jumlah_cicilan', 'paket_bunga', 'paket_nilai_cicilan'];

    public $timestamps = true;
}
