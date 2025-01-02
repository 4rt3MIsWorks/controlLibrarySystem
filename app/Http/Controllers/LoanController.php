<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function loans(){
        return $this->hasMany('App\Models\Author');
    }

    public function index()
    {
        $loans = Loan::with('books', 'students')->get();
        return view('loan.index', compact('loans'));
    }

    public function create()
    {
        return view('loan.create');
    }
}
