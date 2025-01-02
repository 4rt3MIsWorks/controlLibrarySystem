<x-layout title="Biblioteca do Senhor Raimundo">
    <header class="bg-dark text-white py-4">
        <div class="container d-flex justify-content-center align-items-center">
            <h1>Biblioteca do Senhor Raimundo</h1>
        </div>
    </header>

    <main class="container py-5">
        <div>
            <div class="d-flex justify-content-center">
                <a href=" {{route('emprestimos.create')}} " class="btn btn-primary mt-2" style="font-size:20px">Criar um Novo Empréstimo</a>
            </div>
            <br>
            <br>
            <br>
            <table class="table table-hover">
                <thead>
                <tr align="center" style="font-size:25px;" class="table-primary">
                    <th scope="col">ID do Empréstimo</th>
                    <th scope="col">Nome do Aluno</th>
                    <th scope="col">Nome do Livro</th>
                    <th scope="col">Data de Empréstimo</th>
                    <th scope="col">Data de Devolução</th>
                    <th scope="col">Status</th>
                    <th scope="col">Ações</th>
                </tr>
                </thead>
                <tbody align="center">
                @foreach($loans as $loan)
                    <tr>
                        <th scope="row">{{ $loan->id }}</th>
                        <td>{{ $loan->$student->nome }}</td>
                        <td>{{ $loan->$books->titulo }}</td>
                        <td>{{ $loan->data_emprestimo }}</td>
                        <td>{{ $loan->data_devolucao }}</td>
                        <td>{{ $loan->status }}</td>
                        <td>
                            <form method="post" action="{{ route('$loan.destroy', $loan->id) }}">
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
