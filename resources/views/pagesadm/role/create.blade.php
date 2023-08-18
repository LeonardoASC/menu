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
    <form action="{{ route('role.store') }}" method="POST" class="bg-white">
        @csrf
        <div class="flex">
            <div>
                <div class="space-y-12 p-6 bg-white">
                    <div class="border-b border-gray-900/10 pb-12 ">
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Cadastrar Colaborador</h2>
                        <p class="mt-1 text-sm leading-6 text-gray-600">Crie um perfil de colaborador.</p>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="w-96 sm:col-span-3">
                                <label for="first-name"
                                    class="block text-sm font-medium leading-6 text-gray-900">Cargo</label>
                                <div class="mt-2">
                                    <input type="text" name="name" id="first-name" autocomplete="given-name"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p class="text-xs  text-gray-500">
                                        {{ $errors->has('name') ? $errors->first('name') : '' }}
                                    </p>
                                </div>
                            </div>

                            <div class="w-96 sm:col-span-4">
                                <label for="description"
                                    class="block text-sm font-medium leading-6 text-gray-900">Descrição
                                </label>
                                <div class="mt-2">
                                    <input id="description" name="description" type="text"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p class="text-xs  text-gray-500">
                                        {{ $errors->has('description') ? $errors->first('description') : '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-6 p-6 flex items-center justify-center gap-x-6 bg-white">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancelar</button>
                    <button type="submit"
                        class="rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cadastrar</button>
                </div>
            </div>
            <div class="flex flex-col">
                @foreach ($permissions as $permission)
                <label >
                    <input type="checkbox" name="selected_permissions[]" value="{{ $permission->id }}">
                   - {{ $permission->name }}
                </label>
            @endforeach
            </div>
        </div>
    </form>
</body>

</html>
