<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permintaan extends Model
{
    use HasFactory;

    protected $table = 'permintaan';

    protected $fillable = [
        'user_id',
        'permohonan_path',
        'eselon_path',
        'kepala_pusdiklat_path',
        'pengambilan',
        'alamat_pengambilan',
        'email_pengambilan',
        'status',
    ];
}
