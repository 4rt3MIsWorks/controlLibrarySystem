<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller {
    function index() {
        $students = Student::all();
        $message = session('success');
        return view('student.index', compact('students', 'message'));
    }

    public function create() {
        return view('student.create');
    }

    public function store(Request $request) {
        $request -> validate([
            'nome' => 'required|min:4|max:30',
            'matricula' => 'required'
        ]);
        $students = Student::create($request->all());
        $message = "O aluno $students->nome foi cadastrado com sucesso!";
        return to_route('alunos.index')->with('success', $message);
    }

    public function destroy($id) {
        $student = Student::find($id);
        $student->delete();
        $message = "O aluno $student->nome foi removido do sistema com sucesso!";
        return to_route('alunos.index')->with('success', $message);
    }

    public function edit($id)
    {
        $student = Student::find($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request,  $id)
    {
        $request -> validate([

            'nome' => 'required|min:4|max:30',
            'matricula' => 'required'
        ]);
        $student = Student::find($id);
        $student -> update($request->all());
        $message = "O aluno $student->nome foi editado com sucesso!";
        return to_route('alunos.index')->with('success', $message);
    }

}
