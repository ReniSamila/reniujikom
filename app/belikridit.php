<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class belikridit extends Model
{
    protected $fillable = ['kode', 'no_ktp', 'kode_paket', 'kode_motor', 'tanggal_kridit', 'fotokopi_ktp', 'fotokopi_kk', 'fotokopi_slip_gaji'];

    public $timestamps = true;

    public function Motor()
    {
        return $this->belongsTo('App\Motor', 'motor_id');
    }
    public function kategori()
    {
        return $this->belongsTo('App\Kategori', 'kategori_id');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
