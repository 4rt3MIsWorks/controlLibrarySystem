<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loans(){
        return $this->hasMany('App\Models\Author');
    }
}
