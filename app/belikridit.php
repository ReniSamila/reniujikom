<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belikridit extends Model
{
    protected $fillable = ['kode_kridit', 'no_ktp_pembeli', 'kode_paket', 'kode_motor', 'tanggal_kridit', 'fotokopi_ktp', 'fotokopi_kk', 'fotokopi_slip_gaji'];

    public $timestamps = true;
}
