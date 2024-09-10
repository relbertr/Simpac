<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Usuário</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>

    <!-- Exibir mensagem de sucesso -->
    @if(session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('cadastrar.usuario') }}" method="POST">
        @csrf
        <label for="name">Nome:</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label for="password">Senha:</label>
        <input type="password" name="password" id="password">
        @error('password')
            <div>{{ $message }}</div>
        @enderror
        <br>

        <label for="is_admin">É Administrador?</label>
        <input type="checkbox" name="is_admin" id="is_admin" value="1">
        <br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
