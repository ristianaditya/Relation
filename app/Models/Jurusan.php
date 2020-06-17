<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    public function student()
{
    return $this->belongsTo('App\Models\Student' , 'foreign_key');
}
}
