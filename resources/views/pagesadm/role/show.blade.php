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
    <h1>Detalhes do Papel</h1>
    <p>Nome: {{ $role->name }}</p>
    <p>Descrição: {{ $role->description }}</p>
</body>
</html>
