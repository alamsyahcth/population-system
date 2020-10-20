<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempPenduduksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temp_penduduks', function (Blueprint $table) {
            $table->id();
            $table->string('id_penduduk');
            $table->string('no_kk');
            $table->string('nik');
            $table->string('name');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('status_perkawinan');
            $table->string('status_dalam_keluarga');
            $table->string('kewarganegaraan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat');
            $table->string('status');
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
        Schema::dropIfExists('temp_penduduks');
    }
}
