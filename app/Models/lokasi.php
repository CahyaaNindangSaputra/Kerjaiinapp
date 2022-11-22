<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lokasi extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "perusahaan";
    protected $fillable = [

        'alamat_perusahaan',
        'provinsi',
        'kecamatan',
        'kode_pos',
        'nama_alamat',
     ];

}
