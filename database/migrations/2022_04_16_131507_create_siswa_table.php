<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('student_group_id');
            $table->uuid('region_id');
            $table->integer('nis');
            $table->integer('nisn');
            $table->integer('nik');
            $table->string('nama');
            $table->string('jk');
            $table->integer('no_kartu_keluarga');
            $table->string('tempat_lahir');
            $table->date('tgl_lahir');
            $table->integer('no_regis_akta_lahir');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('alamat_jalan');
            $table->integer('rt');
            $table->integer('rw');
            $table->string('kelurahan_desa');
            $table->string('kecamatan');
            $table->integer('kode_pos');
            $table->string('tempat_tinggal');
            $table->string('moda_transportasi');
            $table->integer('anak_ke');
            $table->boolean('punya_kip');
            $table->integer('nomor_kip');
            $table->integer('no_hp_siswa');
            $table->string('email_siswa');
            $table->integer('tinggi_badan_siswa');
            $table->integer('berat_badan_siswa');
            $table->integer('lingkar_kepala');
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
        Schema::dropIfExists('siswa');
    }
}
