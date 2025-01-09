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
        $loans = Loan::with(['books', 'students']) -> get();
        $message = session('success');
        return view('loan.index', compact('loans', 'message'));
    }

    public function create()
    {
        $books = Book::where('status', 'available') -> get();
        $students = Student::all();
        return view('loan.create', compact('books', 'students'));
    }
}
