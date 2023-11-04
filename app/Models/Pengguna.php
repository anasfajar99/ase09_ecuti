<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pengguna extends Model
{
    protected $table = 'tb_account';

    protected $fillable = [
        'username',
        'password',
        'gmail',
        'no_hp',
        'created_at',
        'updated_at',
        'alamat',
        'id',
    ];
}