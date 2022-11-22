<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nonformal extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pelamar";
    protected $fillable = [
    'nama_kursus',
       'mulai_nonformal',
       'lulus_nonformal',
       'tempat_nonformal',
       'sertifikat_nonformal',
    ];

}
