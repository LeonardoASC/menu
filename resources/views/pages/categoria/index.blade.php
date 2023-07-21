<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    @vite('resources/css/app.css')
</head>

<body>
    <x-caminho/>

    <div class="flex flex-col justify-center items-center">
        <div
            class="!z-5 relative items-center flex flex-col rounded-[20px] max-w-[300px] bg-white bg-clip-border shadow-3xl shadow-shadow-500 flex flex-col w-full !p-4 3xl:p-![18px] bg-white undefined">

            <div class="relative flex flex-row justify-between">
                <div class="flex items-center">
                    <div
                        class="flex h-9 w-9 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-100 dark:bg-white/5">
                    </div>
                    <h4 class="ml-4 text-xl font-bold text-navy-700 dark:text-white">
                        Categorias
                    </h4>

                </div>
            </div>



            @foreach ($categorias as $categoria)
                <div class="h-full w-full flex justify-end">
                    <div class="mt-5 flex items-center justify-between p-2 ">
                        <div class="flex items-center justify-center gap-2 ">
                            <p class="text-base font-bold text-navy-700 dark:text-white">
                                {{ $categoria->nome }}
                            </p>
                        </div>
                        <a href="{{ route('categoria.edit', ['categoria' => $categoria->id]) }}">
                            <button
                                class="border border-indigo-500  text-white rounded-md px-1 py-1 m-1 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                                Editar
                            </button>
                        </a>
                        <form method="POST" action="{{ route('categoria.destroy', ['categoria' => $categoria->id])}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                            class="border border-indigo-500 bg-red-400 text-white rounded-md px-1 py-1 m-1 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                            Excluir
                        </button>
                    </form>

                    </div>
                </div>
            @endforeach
            <a href="{{ route('categoria.create') }}">
                <button type="button"
                    class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-indigo-600 focus:outline-none focus:shadow-outline">
                    Adicionar categoria
                </button>
            </a>
        </div>
</body>

</html>
