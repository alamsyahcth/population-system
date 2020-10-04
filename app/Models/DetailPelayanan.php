<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPelayanan extends Model
{
    use HasFactory;

    protected $table = 'detail_pelayanans';
    protected $fillable = [
        'id_pelayanan',
        'id_penduduk',
        'id_keperluan',
        'keterangan',
    ];
}
