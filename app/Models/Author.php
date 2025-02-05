<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'nacionalidade'];
    public function books(){
        return $this->hasMany('App\Models\Book');
    }
    public function loans(){
        return $this->belongsTo('App\Models\Loan');
    }
}
