<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "pelamar";
    protected $fillable = [
    'nama_prestasi',
    'tingkat',
    'skor_tes',
    'organisasi',
    ];
}
