<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKriditpaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriditpakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('kode_paket');
            $table->Double('harga_paket_cash');
            $table->Double('paket_uang_muka');
            $table->Integer('paket_jumlah_cicilan');
            $table->Double('paket_bunga');
            $table->Double('paket_nilai_cicilan');
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
        Schema::dropIfExists('kriditpakets');
    }
}
