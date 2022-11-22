<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendidikan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pelamar";
    protected $fillable = [

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
];
}
