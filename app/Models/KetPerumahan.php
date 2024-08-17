<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetPerumahan extends Model
{
    use HasFactory;
    protected $fillable = [
        'status_penugasan',
        'status_lahan',
        'luas_lantai',
        'jenis_lantai',
        'jenis_dinding',
        'jenis_atap',
        'kondisi_atap',
        'jumlah_kamar',
        'peroleh_air',
        'sumber_penerangan',
        'watt_listrik',
        'bahan_energi', // bahan bakar / energi
        'guna_wc',
        'jenis_wc',
        'akhir_wc',
        'foto',
        'kepala_id',
    ];
}
