<x-layout title="Tela do Estudante">
    @isset($message)
        <script>
            alert("{{ $message }}")
        </script>
    @endisset
    <header class="bg-dark text-white py-4">
        <div class="container d-flex justify-content-center align-items-center">
            <h1>Biblioteca do Senhor Raimundo</h1>
        </div>
    </header>

    <main class="container py-5">
        <div>
            <div class="d-flex justify-content-center">
                <a href=" {{route('alunos.create')}} " class="btn btn-primary mt-2" style="font-size:20px">Cadastrar um Novo Aluno</a>
            </div>
            <br>
            <br>
            <br>
            <table class="table table-hover">
                <thead>
                <tr align="center" style="font-size:25px;" class="table-primary">
                    <th scope="col">ID do Aluno</th>
                    <th scope="col">Nome do Aluno</th>
                    <th scope="col">Matricula do Aluno</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody align="center">
                    @foreach($students as $student)
                        <tr>
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->nome }}</td>
                            <td>{{ $student->matricula }}</td>
                            <td>
                                <form method="post" action="{{ route('alunos.destroy', $student->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Biblioteca do Senhor Raimundo | Todos os direitos reservados</p>
    </footer>
</x-layout>
