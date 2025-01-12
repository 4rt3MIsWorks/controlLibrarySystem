<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Loan;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Book;


class LoanController extends Controller
{
    public function student(){
        return $this->hasMany('App\Models\Author');
    }
    public function book(){
        return $this->hasMany('App\Models\Author');
    }

    public function index()

    {
        $books =Book::all();
        $students = Student::all();
        $loans = Loan::with(['books', 'student']) -> get();
        $message = session('success');
        return view('loan.index', compact('loans', 'books', 'students', 'message'));
    }

    public function create()
    {
        $books =Book::all();
        $students = Student::all();
        return view('loan.create', compact('books', 'students'));
    }

     public function store(Request $request){
        $request->merge([
            'status' => 0,
        ]);
        $request->validate([
            'data_emprestimo' => 'required|date',
            'data_devolucao' => 'required|date',
        ]);
        $loan = Loan::create($request->all());
        $message = "O empréstimo do livro $loan->id foi registrado com sucesso!";
        return to_route('emprestimos.index')->with('success', $message);

    }
    public function edit($id)
    {
        $students = Student::all();
        $books =Book::all();
        $loan = Loan::find($id);
        return view('loan.edit', compact('loan', 'books', 'students'));
    }

    public function update(Request $request,  $id)
    {

        $loan = Loan::find($id);
        $loan -> update($request->all());
        $loan = "O aluno $loan->nome foi editado com sucesso!";
        return to_route('emprestimos.index')->with('success');
    }

     // Exclui o empréstimo
     public function destroy($loanId)
     {
         $loan = Loan::findOrFail($loanId);
         $loan->delete();

         $message = "O empréstimo foi removido do sistema com sucesso.";
         return to_route('emprestimos.index')->with('success', $message);
     }

}
