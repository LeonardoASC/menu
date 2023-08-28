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
    <div class="flex flex-col justify-center items-center h-screen">
        <h1 class="block text-gray-700 font-bold mb-2">Detalhes do Usuario</h1>
    <div class="bg-white p-8 rounded-md shadow-md flex flex-col justify-center items-center">
        <p>Nome: {{ $usuario->name }}</p>
        <p>Descrição: {{ $usuario->email }}</p>
    </div>
    </div>
</body>
</html>
