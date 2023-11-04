<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Permintaan extends Model
{
    protected $table = "tb_request"; // Ganti nama tabel dengan nama tabel kamu
    protected $fillable = [
        "id",
        "nama_karyawan",
        "alasan",
        "tanggal_cuti",
        "status",
        "jumlah_hari",
        "created_at",
        "updated_at"
    ];
}

