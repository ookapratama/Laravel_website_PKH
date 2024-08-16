<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaRumahTangga extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nik',
        'hubungan',
        'jkl',
        'umur',
        'status_kawin',
        'kepemilikan_akta',
        'kartu_identitas',
        'status_kehamilan',
        'riwayat_penyakit',
        'partisipasi_sekolah',
        'jenjang_pendidikan', // jika partisipasi sekolah = belum/masih sekolah
        'ijazah',
        'pekerjaan',
        'kedudukan_pekerjaan',
        'kepala_id',
    ]; 
}
