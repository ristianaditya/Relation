<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function jurusan()
    {
        return $this->hasMany('App\Models\Jurusan');
    }
}
