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

    <div class="flex h-screen w-full items-center justify-center bg-fundo bg-cover bg-no-repeat"
        >
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
            <div class="text-white">
                <div class="mb-8 flex flex-col items-center">
                    <h1 class="mb-2 text-2xl">Atualizar quantidade de cadeiras</h1>
                </div>

                <form action="{{ route('mesa.update', ['mesa' => $mesa->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-4 text-lg">
                        <input type="text" name="numero_cadeiras" value="{{ $mesa->numero_cadeiras ?? old('numero_cadeiras') }}"
                            class="rounded-3xl border-none bg-primary bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                            placeholder="" />
                    </div>
                    <div class="mt-8 flex justify-center text-lg text-black">
                        <button type="submit"
                            class="rounded-3xl bg-primary bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
