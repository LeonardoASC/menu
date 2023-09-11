<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <x-navbarheader />

    <div
        class="flex flex-col h-screen min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800  shadow-lg rounded md:ml-64 pt-14">
        <div class="rounded-t mb-0 px-0 border-0">
            <div class="flex flex-wrap items-center px-4 py-2">
                <div class=" w-full max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Cargos cadastrados</h3>
                </div>
                <div class="flex bg-gray-50 items-center p-2 rounded-md">
                    <form action="{{ route('role.index') }}" method="GET" class="flex items-center">
                        <div class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input class="bg-gray-50 outline-none ml-1 block" type="text" name="termo"
                            placeholder="Pesquisar..." value="{{ $termo }}">
                        <button type="button" id="limpar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M14.348 14.849l-1.5 1.5L10 11.5l-2.849 2.849-1.5-1.5L8.5 10 5.651 7.151l1.5-1.5L10 8.5l2.849-2.849 1.5 1.5L11.5 10l2.849 2.849z" />
                            </svg>
                        </button>
                    </form>
                </div>
                <div class=" w-full max-w-full flex-grow flex-1 text-right">
                    <a href="{{ route('role.create') }}">
                        <button
                            class="bg-blue-500 dark:bg-gray-100 text-white active:bg-blue-600 dark:text-gray-800 dark:active:text-gray-700 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button">Novo</button>
                    </a>
                </div>
            </div>

            <div class="block w-full h-80 overflow-y-auto">
                <table class="items-center w-full">
                    <thead>
                        <tr>
                            <th
                                class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Cargo</th>
                            <th
                                class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Descrição</th>
                            {{-- <th
                                class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                Permissoes</th> --}}
                            <th
                                class="px-4 bg-gray-100 dark:bg-gray-600 text-gray-500 dark:text-gray-100 align-middle border border-solid border-gray-200 dark:border-gray-500 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                options</th>

                        </tr>
                    </thead>
                    <tbody class="">
                        @if ($roles->isEmpty())
                            <tr class="text-gray-700  dark:text-gray-100 ">
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0  whitespace-nowrap p-4 text-left">
                                    Nenhum Usuario Registrado.
                                </td>
                            </tr>
                        @else
                            @foreach ($roles as $role)
                                <tr class="text-gray-700  dark:text-gray-100 ">
                                    <td
                                        class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                        {{ $role->name }} - {{ $role->id }}

                                    </td>
                                    <td
                                        class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        {{ $role->description }}</td>
                                    <td
                                        class="border-t-0 flex gap-2 px-4 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                        <a href="{{ route('role.show', ['role' => $role->id]) }}"
                                            class="border p-2 rounded-lg hover:bg-slate-200">Ver</a>
                                        <a href="{{ route('role.edit', ['role' => $role->id]) }}"
                                            class="border p-2 rounded-lg hover:bg-slate-200">Editar</a>
                                        <form action="{{ route('role.destroy', $role->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-gray-700 border p-2 rounded-lg hover:bg-slate-200"
                                                type="submit">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    {{-- Toastr --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            // toastr.success("{{ session('message') }}");
            toastr.error("{{ session('message') }}");
        @endif
    </script>
    <script>
        //apagar o registro da pesquisa
        document.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector("input[name='termo']");
            var button = document.getElementById("limpar");

            input.addEventListener("keydown", function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    input.form.submit();
                }
            });

            button.addEventListener("click", function(event) {
                input.value = "";
                input.form.submit();
            });
        });
    </script>
</body>

</html>
