<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBayarcicilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bayarcicilans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('kode');
            $table->Integer('kode_kridit');
            $table->date('tanggal_cicilan');
            $table->Integer('jumlah_cicilan');
            $table->Integer('cicilan_ke');
            $table->Integer('cicilan_sisa_ke');
            $table->double('cicilan_sisa_harga');
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
        Schema::dropIfExists('bayarcicilans');
    }
}
