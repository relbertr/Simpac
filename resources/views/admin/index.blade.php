<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Administração</title>
</head>
<body>
    <h1>Bem-vindo ao Painel de Administração!</h1>
    <div class="button-container">
        <a href="{{ route('admin') }}">
            <button class="button">Iniciar Simposio</button>
        </a>

        <a href=>
            <button class="button">Terminar Simposio</button>
        </a>

       
        <a href="{{ route('trabalhos') }}">
            <button class="button">Novo Trabalho</button>
        </a>
        <a href=>
            <button class="button">Alterar Trabalho</button>
        </a>

        <a href="{{ route('resultados') }}">
            <button class="button">Resultados</button>
        </a>

        <a href={{>
            <button class="button"> Avaliadores Cadastrados</button>
        </a>
    </div>
</body>
</html>
