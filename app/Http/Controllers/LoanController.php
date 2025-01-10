<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use Illuminate\Http\Request;
use App\Models\Book;


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
        return view('loan.create');
    }

     public function store(Request $request){

        $request->validate([
            'book_id' => 'required|exists:books,id',
            'student_id' => 'required|exists:students,id',
            'data_emprestimo' => 'required|date',
        ]);
        $loan = Loan::create([
            'book_id' => $request->book_id,
            'student_id' => $request->student_id,
            'data_emprestimo' => $request->data_emprestimo,
            'status' => 'active',
        ]);
         $book = Book::find($request->book_id);
         $book->status = 'borrowed';
         $book->save();
 
         $message = "O empréstimo do livro {$book->titulo} foi registrado com sucesso!";
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
