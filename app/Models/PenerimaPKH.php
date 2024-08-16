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
}
