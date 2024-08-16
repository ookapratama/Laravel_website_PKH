<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KetAset extends Model
{
    use HasFactory;
    protected $fillable = [
        'have_lemari_es',
        'have_tv',
        'have_sepeda',
        'have_motor',
        'luas_lahan',
        'have_ternak',
        'jumlah_ternak',
        'have_usaha',
        'penghasilan_bulanan',
    ];
}
