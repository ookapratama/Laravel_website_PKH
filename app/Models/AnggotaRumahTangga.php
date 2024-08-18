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
        'tempat_lahir',
        'tgl_lahir',
        'umur',
        'status_kawin',
        'kepemilikan_akta',
        'kartu_identitas',
        'status_kehamilan',
        'riwayat_penyakit',
        'jenis_cacat',
        'partisipasi_sekolah',
        'jenjang_pendidikan', // jika partisipasi sekolah = belum/masih sekolah
        'ijazah',
        'pekerjaan',
        'penghasilan_perbulan',
        'kedudukan_pekerjaan',
        'kepala_id',
    ]; 

    public function krt() {
        return $this->hasOne(KepalaRumah::class, 'id', 'kepala_id');
    }
}
