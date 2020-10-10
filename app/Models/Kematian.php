<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kematian extends Model
{
    use HasFactory;

    protected $table = 'kematians';
    protected $fillable = [
        'id_penduduk',
        'tgl_laporan',
        'tgl_kematian',
        'waktu_kematian',
        'lokasi_kematian',
        'penyebab',
        'nik_pelapor',
        'nama_pelapor',
        'status'
    ];
}
