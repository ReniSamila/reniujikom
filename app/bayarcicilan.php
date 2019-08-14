<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bayarcicilan extends Model
{
    protected $fillable = ['kode', 'kode_kridit', 'tanggal_cicilan', 'jumlah_cicilan', 'cicilan_ke', 'cicilan_sisa_ke', 'cicilan_sisa_harga'];

    public $timestamps = true;
}
