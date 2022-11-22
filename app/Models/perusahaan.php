<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "perusahaan";
    protected $fillable = [

//perusahaan
      'id_perusahaan',
      'nama_perusahaan',
      'jenis_usaha',
      'no_telp_perusahaan',
      'email',
      'website',
      'deskripsi_perusahaan',


//lokasi perusahaan
      'alamat_perusahaan',
      'provinsi',
      'kecamatan',
      'kode_pos',
      'nama_alamat',

//cpperusahaan
      'nama_cp',
      'no_telp_cp',
      'email_cp',
      'alamat_cp',
      'jabatan_cp',


//legalitas
      'akta_pendiri_perusahaan',
      'tanggal_penegasan',
      'nama_notaris',
      'siup',
      'npwp',
      'bentuk_penanaman_modal',
      'tdp',
      'nib',
    ];
}
