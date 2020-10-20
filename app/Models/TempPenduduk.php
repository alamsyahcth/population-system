<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TempPenduduk extends Model
{
    use HasFactory;

    protected $table = 'temp_penduduks';
    protected $fillable = [
        'id_penduduk',
        'no_kk',
        'nik',
        'name',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pendidikan',
        'pekerjaan',
        'status_perkawinan',
        'status_dalam_keluarga',
        'kewarganegaraan',
        'nama_ayah',
        'nama_ibu',
        'alamat',
        'status',
    ];
}
