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
        'pendidikan_terakhir',
        'pekerjaan',
        'tempat_lahir',
        'tgl_lahir',
        'penghasilan_perbulan',
        'riwayat_penyakit',
        'jenis_cacat',
        // 'kabupaten',
        // 'kecamatan',
        'jumlah_art',
    ];

    public function art()
    {
        return $this->hasMany(AnggotaRumahTangga::class, '');
    }
}
