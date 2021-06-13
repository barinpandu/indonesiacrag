<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// cara default laravel
class Crag extends Model
{
    use HasFactory;
    // tambahkan variabel guarded atau fillable bila menggunakan method create()
    protected $guarded = ['id'];

    protected $fillable = [
        'nama',
        'lokasi',
        'provinsi',
        'jenis',
        'retribusi',
        'jumlah jalur',
        'cara'
    ];
}

// cara setting tabel sendiri
// class Tebing extends Model
// {
//     use HasFactory;
//     protected $table = "(masukkan nama tabel yang ingin dipakai)";
// }