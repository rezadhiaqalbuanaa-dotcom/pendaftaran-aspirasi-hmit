<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
     protected $table = 'pendaftar'; 

     protected $fillable = [
        'nama',
        'nim',
        'email',
        'alasan'
    ];
}
