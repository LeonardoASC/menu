<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<script src="https://cdn.tailwindcss.com"></script>

<body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6 text-center">Registrar categoria</h1>
        <a href="{{ route('categoria.index') }}">
            <button type="button"
                class="border border-indigo-500 bg-red-400 text-white rounded-md px-1 py-1 m-1 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                Voltar
            </button>
        </a>
        <a href="{{ route('categoria.index') }}">
            <button type="button"
                class="border border-indigo-500 bg-red-400 text-white rounded-md px-1 py-1 m-1 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                Consultar
            </button>
        </a>
        <form action="{{ route('categoria.store') }}" method="post"
            class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Name da Categoria</label>
                <input
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" id="name" name="nome" placeholder="Cerveja"
                    value="{{ $categoria->nome ?? old('nome') }}">
                {{ $errors->has('nome') ? $errors->first('nome') : '' }}
            </div>
            <button
                class="w-full bg-indigo-500 text-white text-sm font-bold py-2 px-4 rounded-md hover:bg-indigo-600 transition duration-300"
                type="submit">Registrar</button>
        </form>
    </div>
</body>

</html>
