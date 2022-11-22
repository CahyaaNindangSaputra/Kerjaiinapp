<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaan', function (Blueprint $table) {
            $table->id();
            $table->integer('id_perusahaan');
            $table->string('nama_perusahaan');
            $table->string('jenis_usaha');
            $table->string('no_telp_perusahaan');
            $table->string('email');
            $table->string('website');
            $table->string('deskripsi_perusahaan');
            $table->string('alamat_perusahaan');
            $table->string('provinsi');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('nama_alamat');
            $table->string('nama_cp');
            $table->string('no_telp_cp');
            $table->string('email_cp');
            $table->string('alamat_cp');
            $table->string('jabatan_cp');
            $table->string('akta_pendiri_perusahaan');
            $table->string('tanggal_penegasan');
            $table->string('nama_notaris');
            $table->string('siup');
            $table->string('npwp');
            $table->string('bentuk_penanaman_modal');
            $table->string('tdp');
            $table->string('nib');
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
        Schema::dropIfExists('perusahaan');
    }
};
