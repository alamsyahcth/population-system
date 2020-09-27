<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Penduduk extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'penduduk';

    protected $fillable = [
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
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
