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
        class="flex flex-col min-w-0 mb-4 lg:mb-0 break-words bg-gray-50 dark:bg-gray-800  shadow-lg rounded md:ml-64 pt-14">
        <div class="rounded-t mb-0 px-0 border-0">
            <div class="flex flex-wrap items-center px-4 py-2">
                <div class=" w-full max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">Cargos cadastrados</h3>
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
                            <p>Nenhum cargo Registrado.</p>
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
</body>

</html>
