<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listcuti extends Model
{
    use HasFactory;
    protected $table = 'listcuti';

    protected $fillable = [
        'id_karyawan',
        'tanggal_mulai_cuti',
        'lama',
        'alasan',
        'status',
    ];
}
