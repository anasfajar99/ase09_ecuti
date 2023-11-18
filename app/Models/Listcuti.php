<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Listcuti extends Model
{
    protected $table = 'listcuti';

    protected $fillable = [
        'id',
        'id_karyawan',
        'tanggal_mulai_cuti',
        'lama',
        'alasan',
        'status',
        'created_at',
        'updated_at'
    ];
}