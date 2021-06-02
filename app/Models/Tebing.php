<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// cara default laravel
class Tebing extends Model
{
    use HasFactory;
    // tambahkan variabel guarded atau fillable bila menggunakan method create()
    protected $guarded = ['id'];
}

// cara setting tabel sendiri
// class Tebing extends Model
// {
//     use HasFactory;
//     protected $table = "(masukkan nama tabel yang ingin dipakai)";
// }