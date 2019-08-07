<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    protected $fillable = ['no_ktp_pembeli', 'nama_pembeli', 'alamat_pembeli', 'telpon_pembeli', 'pembeli_hp'];

    public $timestamps = true;
}
