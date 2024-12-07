<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaction extends Model  
{  
    use HasFactory;  

    // Tambahkan atribut yang ingin diizinkan untuk mass assignment  
    protected $fillable = [  
        'nama',  
        'nomorhp',  
        'alamat',  
        'kategori',  
        'harga',  
        'status',  
    ];  
}  
