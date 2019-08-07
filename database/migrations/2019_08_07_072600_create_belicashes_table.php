<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBelicashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belicashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('kode_cash');
            $table->string('no_ktp_pembeli');
            $table->Integer('kode_motor');
            $table->date('tanggal_cash');
            $table->double('bayar_cash');
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
        Schema::dropIfExists('belicashes');
    }
}
