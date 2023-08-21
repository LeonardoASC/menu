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
    {{-- <x-navbarheader /> --}}
    <form action="{{ route('usuario.store') }}" method="POST" class="bg-white">
        @csrf
        <div class="space-y-12 p-6 bg-white">
            <div class="border-b border-gray-900/10 pb-12 ">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Cadastrar Colaborador</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Crie um perfil de colaborador.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="w-96 sm:col-span-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Nome
                            Completo</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <p class="text-xs  text-gray-500">
                                {{ $errors->has('name') ? $errors->first('name') : '' }}
                            </p>
                        </div>
                    </div>



                    <div class="w-96 sm:col-span-4">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        </label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <p class="text-xs  text-gray-500">
                                {{ $errors->has('email') ? $errors->first('email') : '' }}
                            </p>
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Função</label>
                        <div class="mt-2">
                            <select id="country" name="funcao" autocomplete="country-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option class="text-zinc-400 w-6">-- Selecione --</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <p class="text-xs  text-gray-500">
                                {{ $errors->has('funcao') ? $errors->first('funcao') : '' }}
                            </p>
                        </div>
                    </div>


                    <div class="w-96 sm:col-span-2 sm:col-start-1">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Senha</label>
                        <div class="mt-2">
                            <input type="password" name="password" id="city" autocomplete="address-level2"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <p class="text-xs  text-gray-500">
                                {{ $errors->has('password') ? $errors->first('password') : '' }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="mt-6 p-6 flex items-center justify-center gap-x-6 bg-white">
            <a class="text-sm font-semibold leading-6 text-gray-900" href="{{ route("usuario.index") }}">Cancelar</a>
            <button type="submit"
                class="rounded-md bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Cadastrar</button>
        </div>
    </form>
</body>

</html>
