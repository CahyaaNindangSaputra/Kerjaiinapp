<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cp extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "perusahaan";
    protected $fillable = [

        'nama_cp',
        'no_telp_cp',
        'email_cp',
        'alamat_cp',
        'jabatan_cp',
     ];

}
