<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writers extends Model
{
    //use HasFactory;


    public function articles()
    {
        return $this->hasMany(Articles::class, 'id');
    }

    public function courses()
    {
        return $this->hasMany(Course::class, 'writerId');
    }
}
