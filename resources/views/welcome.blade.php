<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .button-container {
            margin: 20px;
        }
        .button {
            padding: 15px 30px;
            font-size: 16px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Página Inicial</h1>

    <div class="button-container">
        <a href="{{ route('admin') }}">
            <button class="button">Administrador</button>
        </a>

        <a href="{{ route('avaliadores') }}">
            <button class="button">Avaliadores</button>
        </a>

        <a href="{{ route('resultados') }}">
            <button class="button">Resultados</button>
        </a>
    </div>
</body>
</html>
