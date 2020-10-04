<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelahiran extends Model
{
    use HasFactory;

    protected $table = 'kelahirans';
    protected $fillable = [
       'id_penduduk',
        'tanggal_lahir',
       'tempat_lahir',
       'kota_lahir',
       'nik_pelapor',
       'nama_pelapor',
    ];
}
