<x-layout title="Cadastro de Estudantes">
    <header class="bg-dark text-white py-4">
        <div class="container d-flex justify-content-center align-items-center">
            <h1>Biblioteca do Senhor Raimundo</h1>
        </div>
    </header>

    <div class="container py-5">
        <form method="post" action="{{ route('alunos.store') }}">
            @csrf
            <div class="row">
                <div class="col">
                    <label for="nome" class="form-label">Nome do Estudante:</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o nome do estudante neste campo">
                </div>
                <div class="col">
                    <label for="matricula" class="form-label">Matricula do Estudante:</label>
                    <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Digite a matricula do aluno neste campo">
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-2" style="font-size:20px">Cadastrar o Estudante</button>
            </div>
        </form>
    </div>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 Biblioteca do Senhor Raimundo | Todos os direitos reservados</p>
    </footer>
</x-layout>
