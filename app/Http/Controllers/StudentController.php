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

    public function destroy($studentId) {
        $student = Student::find($studentId);
        $student->delete();
        $message = "O aluno $student->nome foi removido do sistema com sucesso!";
        return to_route('alunos.index')->with('success', $message);
    }

    public function edit($matricula)
    {
        return view('student.edit');
    }

    public function update(Request $request, Student $student)
    {
        /*
        $request -> validate
        ([

        área para o request

        ]);
        */
        $student -> update($request->all());
        $message = "O aluno $student->nome foi editado com sucesso!";
        return to_route('student.index')->with('success', $message);
    }

}
