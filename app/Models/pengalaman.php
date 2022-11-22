<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengalaman extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pelamar";
    protected $fillable = [
    'pengalaman',
       'jenis_pekerjaan',
       'nama_perusahaan',
       'lokasi_pengalaman',
       'ttg_mulai_pengalaman',
       'ttg_akhir_pengalaman',
       'penghargaan',
    ];
}
