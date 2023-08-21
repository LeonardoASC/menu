<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1>Detalhes do Usuario</h1>
    {{-- @dd($usuario) --}}
    <p>Nome: {{ $usuario->name }}</p>
    <p>Descrição: {{ $usuario->email }}</p>
</body>
</html>
