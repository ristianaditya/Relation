<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name', 'alamat', 'user_id', 'tel' , 'nik' , 'tgl_lahir'
    ];
}
