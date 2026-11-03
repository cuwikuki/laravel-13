<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata1150 extends Model
{
    use HasFactory;

    protected $table = 'biodata1150';

    protected $fillable = [
        'nim',
        'nama',
        'profesi',
        'tentang_saya',
        'email',
        'telepon',
        'alamat',
        'foto_profil',
    ];
}
