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
    public function returnLoan($loanId){
        $loan = Loan::findOrFail($loanId);
        if ($loan->status !== 'active') {
            return back()->with('error', 'Este empréstimo já foi devolvido ou está inativo.');
        }
        $loan->update([
            'data_devolucao' => now(),
            'status' => 'returned',
        ]);
         // Atualiza o status de novo

        $book = Book::find($loan->book_id);
        $book->status = 'available';
        $book->save();
        $message = "O empréstimo do livro {$book->titulo} foi marcado como devolvido.";
        return to_route('emprestimos.index')->with('success', $message);
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
