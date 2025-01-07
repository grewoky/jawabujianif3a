<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPinjam extends Model
{
    protected $fillable = [
        'idanggota',
        'idbuku',
        'tgl_pinjam',
        'tgl_kembali',
        'denda',
    ];
}
