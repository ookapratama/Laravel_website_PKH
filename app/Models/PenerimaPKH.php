<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenerimaPKH extends Model
{
    use HasFactory;
    protected $table = 'penerima_p_k_h_s';
    protected $fillable = [
        'kepala_id',
        'perumahan_id',
        'aset_id',
        'status',
    ];

    public function krt() {
        return $this->hasOne(KepalaRumah::class, 'id', 'kepala_id');
    }

    public function rumah() {
        return $this->hasOne(KetPerumahan::class, 'id', 'perumahan_id');
    }

    public function aset() {
        return $this->hasOne(KetAset::class, 'id', 'aset_id');
    }
}
