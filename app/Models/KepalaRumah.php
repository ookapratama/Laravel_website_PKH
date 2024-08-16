<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaRumah extends Model
{
    use HasFactory;
    protected $fillable = [
        'kk',
        'nik',
        'nama',
        'jkl',
        'alamat',
        'rt',
        'rw',
        // 'kabupaten',
        // 'kecamatan',
        'jumlah_art',
    ];
}
