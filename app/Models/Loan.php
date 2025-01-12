<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = ['books_id','student_id','data_emprestimo','data_devolucao','status'];

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function books(){
        return $this->belongsTo('App\Models\Book');
    }
}
