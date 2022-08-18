<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cam extends Model
{
    use HasFactory;

    protected $fillable = ['tipe', 'waktu', 'total_produksi', 'ratio',
    'overtime', 'tack_time', 'tanggal', 'jam'];
}
