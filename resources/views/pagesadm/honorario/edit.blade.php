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
        <h1 class="text-lg font-semibold p-2 rounded">Editar Honorarios</h1>
        <form action="{{ route('honorario.update', ['honorario' => $honorario->id]) }}" method="post"
            class="bg-white p-8 rounded-md shadow-md flex flex-col justify-center items-center">
            @csrf
            @method('PUT')

            <div class="my-4 flex flex-col p-5 justify-center items-center">
                <p>Preço Cover - R$</p>
                <input type="text" name="preco_cover" value="{{ $honorario->preco_cover ?? old('preco_cover') }}"
                    placeholder="" class="mb-2 rounded border" />
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('preco_cover') ? $errors->first('preco_cover') : '' }}
                </p>

                <p>Porcentagem Garçom - %</p>
                <input type="text" name="porcentagem_garcom"
                    value="{{ $honorario->porcentagem_garcom ?? old('porcentagem_garcom') }}" placeholder=""
                    class="mb-2 border rounded" />
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('porcentagem_garcom') ? $errors->first('porcentagem_garcom') : '' }}
                </p>

                <p>Taxa Cortesia - R$</p>
                <input type="text" name="taxa_cortesia"
                    value="{{ $honorario->taxa_cortesia ?? old('taxa_cortesia') }}" placeholder=""
                    class="mb-2 border rounded" />
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('taxa_cortesia') ? $errors->first('taxa_cortesia') : '' }}
                </p>

                <p>Taxa de Reserva - R$</p>
                <input type="text" name="taxa_reserva" value="{{ $honorario->taxa_reserva ?? old('taxa_reserva') }}"
                    placeholder="" class="mb-2 border rounded" />
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('taxa_reserva') ? $errors->first('taxa_reserva') : '' }}
                </p>
            </div>
            
            <div class="p-5 flex justify-center items-center">
                <button type="submit" class="bg-black p-2 rounded ">Atualizar</button>
            </div>
        </form>
    </div>

</body>

</html>
