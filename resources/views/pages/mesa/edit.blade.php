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
        <h1 class="text-lg font-semibold p-2 rounded">Atualizar quantidade de cadeiras</h1>
        <form action="{{ route('mesa.update', ['mesa' => $mesa->id]) }}" method="post"
            class="w-full max-w-sm mx-auto bg-white p-8 rounded-md shadow-md flex flex-col justify-center items-center">
            @csrf
            @method('PUT')
            <div class="mb-4 flex flex-col justify-center items-center">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Quantidade de cadeiras da
                    mesa</label>
                <input type="text" name="numero_cadeiras" class="mb-2 border rounded mt-4"
                    value="{{ $mesa->numero_cadeiras ?? old('numero_cadeiras') }}" placeholder="" />
            </div>
            <div class="flex justify-center items-center">
                <a href="{{ route('mesa.index') }}">
                    <button type="button" class=" px-4 py-2 select-none border bg-gray-400 text-white rounded-md">
                        Voltar
                    </button>
                </a>
                <div class="p-5 flex justify-center items-center">
                    <button type="submit" class="bg-black p-2 rounded ">Atualizar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
