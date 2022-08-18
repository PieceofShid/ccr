<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    use HasFactory;

    protected $fillable = ['tipe', 'waktu', 'total_produksi', 'ratio_1tr',
    'ratio_2tr', 'satu_tr', 'dua_tr', 'overtime', 'tack_time', 'tanggal', 'jam'];
}
