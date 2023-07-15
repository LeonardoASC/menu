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

    <div class="flex h-screen w-full items-center justify-center bg-gray-900 bg-cover bg-no-repeat"
        style="background-image:url('https://images.unsplash.com/photo-1499123785106-343e69e68db1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1748&q=80')">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
            <div class="text-white">
                <div class="mb-8 flex flex-col items-center">
                    <h1 class="mb-2 text-2xl">Atualizar</h1>
                </div>

                <form action="{{ route('categoria.update', ['categoria' => $categoria->id]) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-4 text-lg">
                        <input type="text" name="nome" value="{{ $categoria->nome ?? old('nome') }}"
                            class="rounded-3xl border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                            placeholder="nova categoria" />
                    </div>
                    <div class="mt-8 flex justify-center text-lg text-black">
                        <button type="submit"
                            class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
