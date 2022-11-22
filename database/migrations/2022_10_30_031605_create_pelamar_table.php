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
        Schema::create('pelamar', function (Blueprint $table) {
            $table->id();
            $table->integer('id_pelamar');
            $table->string( 'nama_depan');
            $table->string( 'nama_belakang');
            $table->string( 'no_hp');
            $table->string(  'alamat');
            $table->string( 'email');
            $table->string(  'gender');
            $table->string( 'berat_badan');
            $table->string(   'tinggi_badan');
            $table->string( 'tingkat_pendidikan');
            $table->string('nama_sekolah');
            $table->string( 'lokasi_pendidikan');
            $table->string('alamat_pendidikan');
            $table->string( 'gelar');
            $table->string('bidang_studi');
            $table->string('tanggal_mulai');
            $table->string( 'tanggal_lulus');
            $table->string( 'ipk');
            $table->string( 'no_ijazah');
            $table->string('tanggal_ijazah');
            $table->string('nama_pejabat_ttd');
            $table->string( 'ijazah');
            $table->string( 'penjabat_pengasah');
            $table->string('sertifikat');
            $table->string('nama_kursus');
            $table->string('mulai_nonformal');
            $table->string('lulus_nonformal');
            $table->string('tempat_nonformal');
            $table->string( 'sertifikat_nonformal');
            $table->string( 'nama_prestasi');
            $table->string('tingkat');
            $table->string('skor_tes');
            $table->string( 'organisasi');
            $table->string( 'pengalaman');
            $table->string( 'jenis_pekerjaan');
            $table->string( 'nama_perusahaan');
            $table->string( 'lokasi_pengalaman');
            $table->string( 'ttg_mulai_pengalaman');
            $table->string('ttg_akhir_pengalaman');
            $table->string('penghargaan');

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
        Schema::dropIfExists('pelamar');
    }
};
