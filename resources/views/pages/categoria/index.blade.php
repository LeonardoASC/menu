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
    <x-navbarheader/>
        <div class=" bg-white h-screen w-full md:ml-64 pt-14">
            <div class="relative flex flex-row justify-between">
                <div class="flex items-center">
                    <h4 class="ml-4 text-xl font-bold text-navy-700 dark:text-white">
                        Categorias
                    </h4>
                </div>
            </div>

            @foreach ($categorias as $categoria)
                <div class="flex mx-4">
                    <div class="mt-5 w-1/2 border rounded-lg flex p-2 ">
                        <div class="flex items-center justify-center gap-2 ">
                            <p class="text-base font-bold flex-grow-1 dark:text-white">
                                {{ $categoria->nome }}
                            </p>
                        </div>
                        <a href="{{ route('categoria.edit', ['categoria' => $categoria->id]) }}">
                            <button
                                class="border text-white rounded-md px-1 py-1 m-1 transition duration-500 ease select-none focus:outline-none focus:shadow-outline">
                                Editar
                            </button>
                        </a>
                        <form method="POST" action="{{ route('categoria.destroy', ['categoria' => $categoria->id])}}">
                            @method('DELETE')
                            @csrf
                            <button type="submit"
                            class="border bg-red-400 text-white rounded-md px-1 py-1 m-1 transition duration-500 ease select-none focus:outline-none focus:shadow-outline">
                            Excluir
                        </button>
                    </form>

                    </div>
                </div>
            @endforeach

            <a href="{{ route('categoria.create') }}">
                <button type="button"
                    class="border border-indigo-500 bg-indigo-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none focus:outline-none focus:shadow-outline">
                    Adicionar categoria
                </button>
            </a>
        </div>
</body>

</html>
