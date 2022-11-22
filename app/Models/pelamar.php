<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelamar extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pelamar";
    protected $fillable = [
       // pelamar
       'id_pelamar',
       'nama_depan',
       'nama_belakang',
       'no_hp',
       'alamat',
       'email',
       'gender',
       'berat_badan',
       'tinggi_badan',

// pendidikan
       'tingkat_pendidikan',
       'nama_sekolah',
       'lokasi_pendidikan',
       'alamat_pendidikan',
       'gelar',
       'bidang_studi',
       'tanggal_mulai',
       'tanggal_lulus',
       'ipk',
       'no_ijazah',
       'tanggal_ijazah',
       'nama_pejabat_ttd',
       'ijazah',
       'penjabat_pengasah',
       'sertifikat',

// nonformal
       'nama_kursus',
       'mulai_nonformal',
       'lulus_nonformal',
       'tempat_nonformal',
       'sertifikat_nonformal',


//prestasi
       'nama_prestasi',
       'tingkat',
       'skor_tes',
       'organisasi',

//pengalaman
       'pengalaman',
       'jenis_pekerjaan',
       'nama_perusahaan',
       'lokasi_pengalaman',
       'ttg_mulai_pengalaman',
       'ttg_akhir_pengalaman',
       'penghargaan',
    ];
}
