<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belicash extends Model
{
    protected $fillable = ['kode', 'no_ktp', 'kode_motor', 'tanggal_cash', 'bayar_cash'];

    public $timestamps = true;
}
