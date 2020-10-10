<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    use HasFactory;

    protected $table = 'keluars';
    protected $fillable = [
        'id_penduduk',
        'tanggal_keluar',
        'alasan_keluar',
        'alamat_tujuan',
        'nik_pelapor',
        'nama_pelapor',
        'status'
    ];
}
