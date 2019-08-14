<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelikriditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belikridits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('kode');
            $table->string('no_ktp');
            $table->Integer('kode_paket');
            $table->Integer('kode_motor');
            $table->date('tanggal_kridit');
            $table->string('fotokopi_ktp');
            $table->string('fotokopi_kk');
            $table->string('fotokopi_slip_gaji');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('belikridits');
    }
}
