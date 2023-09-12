<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mesas</title>
    @vite('resources/css/app.css')


</head>

<body>
    {{-- @dd($mesaDaComanda->comandas[0]->total) --}}
    {{-- @dd($mesaDaComanda->comandas) --}}
    {{-- @foreach ($mesaDaComanda->comandas as $item)
        {{ $item }}
    @endforeach --}}
    {{-- @dd($comandasDaMesa) --}}
    <!-- component -->
    <div x-data="setup()" :class="{ 'dark': isDark }">
        <x-navbarheader />
        <div class="ml-14 md:ml-64 pt-14">
            <div class=" bg-white w-full h-screen dark:bg-gray-700 dark:text-white">
                <div class="flex justify-between">
                    <p class=" text-gray-600 mb-2 text-2xl font-thin px-4 pt-3 dark:text-white">Mesas</p>
                    <a href="{{ route('mesa.create') }}">
                        <button type="button"
                            class=" px-4 py-2 m-2 select-none border bg-gray-400 text-white rounded-md">
                            Adicionar Mesa
                        </button>
                    </a>
                </div>
                <div class="px-2 w-full ">
                    <svg class="absolute z-10 m-1 text-blue-400" width="24" height="24" viewBox="0 0 24 24"
                        fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.71 14H15.5L20.49 19L19 20.49L14 15.5V14.71L13.73 14.43C12.59 15.41 11.11 16 9.5 16C5.90997 16 3 13.09 3 9.5C3 5.90997 5.90997 3 9.5 3C13.09 3 16 5.90997 16 9.5C16 11.11 15.41 12.59 14.43 13.73L14.71 14ZM5 9.5C5 11.99 7.01001 14 9.5 14C11.99 14 14 11.99 14 9.5C14 7.01001 11.99 5 9.5 5C7.01001 5 5 7.01001 5 9.5Z"
                            fill="black" fill-opacity="0.54" />
                    </svg>
                    <input type="text" class="pl-8 p-1 bg-gray-200 w-full rounded relative"
                        placeholder="Search teams or members">
                </div>


                <table class="w-full">
                    <tr>
                        @if ($mesas->isEmpty())
                            <p class="text-center p-2 m-2">Nenhuma mesa cadastrada.</p>
                        @else
                            @foreach ($mesas as $mesa)
                                <td class="flex w-full justify-between items-center text-sm font-semibold p-2 h-14">
                                    <div class="flex items-center justify-between w-1/4">
                                        <p>Mesa {{ $mesa->id }}</p>
                                        {{-- <p>{{ $mesa->status }}</p> --}}
                                        <div class="relative flex">
                                            <span
                                                class="{{ $mesa->status === 'disponivel' ? 'animate-ping ' : ' ' }} absolute inline-flex h-full w-full rounded-full {{ $mesa->status === 'disponivel' ? 'bg-green-400 ' : ' bg-amber-400' }} opacity-75"></span>
                                            <span
                                                class="relative inline-flex rounded-full h-2 w-6 {{ $mesa->status === 'disponivel' ? 'bg-green-400 ' : ' bg-amber-400' }}"></span>
                                        </div>
                                    </div>
                                    <div class="h-px w-[30%] bg-black"></div>
                                    <div class="flex flex-col">
                                        <div class="flex gap-2">
                                            <a href="{{ route('mesa.edit', ['mesa' => $mesa->id]) }}">
                                                <button class="border text-white bg-gray-400 rounded-md px-1 py-1">
                                                    Editar
                                                </button>
                                            </a>
                                            <form method="POST"
                                                action="{{ route('mesa.destroy', ['mesa' => $mesa->id]) }}">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit"
                                                    class="border bg-gray-400 text-white rounded-md px-1 py-1">
                                                    Excluir
                                                </button>
                                            </form>
                                            <button class="border bg-gray-400 text-white rounded-md px-1 py-1"
                                                onclick="toggleId({{ $mesa->id }})">
                                                Ver
                                            </button>

                                        </div>
                                    </div>
                                    <div id="mesa-{{ $mesa->id }}"
                                        class="bg-white hidden absolute w-1/2 mt-10 border shadow-xl rounded-lg text-black z-20">
                                        <div class="border w-full flex justify-between">
                                            <div class="border-b px-2">Mesa n°: {{ $mesa->id }}</div>
                                            <button onclick="toggleId({{ $mesa->id }})"
                                                class="bg-primary px-2 rounded-md">x</button>
                                        </div>
                                        <p>
                                            @if ($mesa->comandas->isEmpty())
                                                <p>Nenhuma comanda nesta mesa.</p>
                                            @else
                                                @foreach ($mesa->comandas as $comanda)
                                                    <p>Numero da comanda: {{ $comanda->id }}, Total:
                                                        {{ $comanda->total }}
                                                    </p>
                                                @endforeach
                                            @endif
                                        </p>
                                    </div>
                                </td>
                            @endforeach
                        @endif
                    </tr>
                </table>


            </div>

        </div>
    </div>

    <script>
        function toggleId(id) {
            const pTag = document.getElementById('mesa-' + id);
            const allPTags = document.querySelectorAll('div[id^="mesa-"]');

            allPTags.forEach(tag => {
                if (tag.id === 'mesa-' + id) {
                    tag.classList.toggle('hidden');
                } else {
                    tag.classList.add('hidden');
                }
            });
        }
    </script>
    {{-- <script>
        function mostrarConteudo(id) {
            const pTag = document.getElementById('mesa-' + id);
            pTag.classList.remove('hidden');
        }

        function esconderConteudo(id) {
            const pTag = document.getElementById('mesa-' + id);
            pTag.classList.add('hidden');
        }
    </script> --}}

</body>

</html>
