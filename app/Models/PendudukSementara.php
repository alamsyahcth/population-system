<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PendudukSementara extends Model
{
    use HasFactory;

    protected $table = 'penduduk_sementaras';
    protected $fillable = [
        'id_penduduk',
        'id_sementara',
        'no_kk',
        'keterangan',
    ];
}
