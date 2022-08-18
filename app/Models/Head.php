<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    use HasFactory;

    protected $fillable = ['tipe', 'waktu', 'total_produksi', 'ratio_1tr', 'ratio_2tr',
    'satu_tr_kai_lai', 'satu_tr_kai_wai', 'satu_tr_less_pipe', 'satu_tr_reguler_lai', 'satu_tr_reguler_wai',
    'dua_tr_kai_lai', 'dua_tr_kai_wai', 'dua_tr_less_pipe', 'dua_tr_reguler_lai', 'dua_tr_reguler_wai',
    'dua_tr_ethanol', 'overtime', 'tack_time', 'tanggal', 'jam'];
}
