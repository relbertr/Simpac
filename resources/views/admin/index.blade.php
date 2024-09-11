<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h1 class="text-center mb-4">Bem-vindo ao Painel de Administração!</h1>
        <div class="text-center mb-4">
            <a href="{{ url('/') }}" class="btn btn-secondary">Voltar para a Página Principal</a>
        </div>
        <div class="button-container text-center">
            <a href="{{ route('admin') }}">
                <button class="btn btn-primary">Iniciar Simpósio</button>
            </a>

            <a href="#">
                <button class="btn btn-danger">Terminar Simpósio</button>
            </a>

            <a href="{{ route('trabalhos') }}">
                <button class="btn btn-success">Novo Trabalho</button>
            </a>
            <a href="#">
                <button class="btn btn-warning">Alterar Trabalho</button>
            </a>

            <a href="{{ route('resultados') }}">
                <button class="btn btn-info">Resultados</button>
            </a>

            <a href="#">
                <button class="btn btn-dark">Avaliadores Cadastrados</button>
            </a>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
