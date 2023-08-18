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
    @dd($user)
    <p>Nome: {{ $user->name }}</p>
    <p>Descrição: {{ $user->email }}</p>
</body>
</html>
