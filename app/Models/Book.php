<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['titulo','author_id','ano_publicacao', 'ISBN'];


    public function author(){
        return $this->belongsTo('App\Models\Author', 'author_id');
    }
    public function loans(){
        return $this->belongsTo('App\Models\Loan', );
    }
}
