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
    <div class="container mx-auto py-8 h-screen flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold mb-6 text-center">Registrar Honorario</h1>

        <form action="{{ route('honorario.store') }}" method="post"
            class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="cover">Registre os honorarios do estabelecimento.</label>
                <input
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" id="cover" name="preco_cover" placeholder="Preco do cover"
                    value="{{ $mesa->preco_cover ?? old('preco_cover') }}">
                {{ $errors->has('preco_cover') ? $errors->first('preco_cover') : '' }}
            </div>
            <div class="mb-4">

                <input
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" id="name" name="porcentagem_garcom" placeholder="Porcentagem do garcom"
                    value="{{ $mesa->porcentagem_garcom ?? old('porcentagem_garcom') }}">
                {{ $errors->has('porcentagem_garcom') ? $errors->first('porcentagem_garcom') : '' }}
            </div>
            <div class="mb-4">

                <input
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" id="name" name="taxa_reserva" placeholder="Taxa de reserva"
                    value="{{ $mesa->taxa_reserva ?? old('taxa_reserva') }}">
                {{ $errors->has('taxa_reserva') ? $errors->first('taxa_reserva') : '' }}
            </div>
            <div class="mb-4">
                <input
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    type="text" id="name" name="taxa_cortesia" placeholder="Taxa de cortesia"
                    value="{{ $mesa->taxa_cortesia ?? old('taxa_cortesia') }}">
                {{ $errors->has('taxa_cortesia') ? $errors->first('taxa_cortesia') : '' }}
            </div>
            <div class="flex justify-center items-center">
                <a href="{{ route('honorario.index') }}">
                    <button type="button" class=" px-4 py-2 select-none border bg-gray-400 text-white rounded-md">
                        Voltar
                    </button>
                </a>
                <div class="mx-2 flex items-center justify-center">
                    <button type="submit" class="bg-black p-2 rounded text-white">Registrar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
