<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
    protected $fillable = ['data_emprestimo', 'data_devolucao', 'status'];

    public function students(){
        return $this->hasMany('App\Models\Student');
    }

    public function books(){
        return $this->hasMany('App\Models\Book');
    }
}
