<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswapdip extends Model
{
    use HasFactory;
    //mahasiswas
    protected $table = 'mahasiswas';
    protected $fillable = [
        // 'nim',
        'nama',
        'umur',
        'alamat',
        'kota',
        'kelas',
        'jurusan'
    ];

    protected $primaryKey = 'nim';
    protected $hidden;
}
