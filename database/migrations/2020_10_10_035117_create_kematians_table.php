<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKematiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kematians', function (Blueprint $table) {
            $table->id();
            $table->string('id_penduduk');
            $table->date('tgl_laporan');
            $table->date('tgl_kematian');
            $table->time('waktu_kematian');
            $table->string('lokasi_kematian');
            $table->string('penyebab');
            $table->string('nik_pelapor');
            $table->string('nama_pelapor');
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
        Schema::dropIfExists('kematians');
    }
}
