<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    public function student(){
        return $this->belongsToMany(Student::class);
    }

    public function author(){
        return $this->belongsToMany(Author::class);
    }
}
