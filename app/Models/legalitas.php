<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class legalitas extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "perusahaan";
    protected $fillable = [

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
