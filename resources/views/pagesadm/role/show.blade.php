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
    <div class="flex flex-col justify-center items-center h-screen bg-white">
        <h1 class="border p-2 rounded">Detalhes do Cargo</h1>
        <p>Nome: {{ $role->name }}</p>
        <p>Descrição: {{ $role->description }}</p>
    </div>
</body>
</html>
