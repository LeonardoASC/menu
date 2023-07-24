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
    {{-- @dd($mesaDaComanda->comandas[0]->total) --}}
    {{-- @dd($mesaDaComanda->comandas) --}}
    {{-- @foreach ($mesaDaComanda->comandas as $item)
        {{ $item }}
    @endforeach --}}
    {{-- @dd($comandasDaMesa) --}}
    <!-- component -->


    <div class=" bg-white w-1/2">
        <p class=" text-gray-600 mb-2 text-2xl font-thin px-4 pt-3 ">Mesas</p>
        <div class="px-2 w-full ">
            <svg class="absolute z-50 m-1 text-blue-400" width="24" height="24" viewBox="0 0 24 24"
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
                @foreach ($mesas as $mesa)
                    <td class="flex justify-between px-2 py-2 w-full items-center">
                        <p class="flex text-gray-700">
                            <span class="relative flex h-6 w-6 mx-2">
                                <span
                                    class="{{ $mesa->status === 'ativo' ? 'animate-ping ' : ' ' }} absolute inline-flex h-full w-full rounded-full {{ $mesa->status === 'ativo' ? 'bg-green-400 ' : ' bg-gray-500' }} opacity-75"></span>
                                <span
                                    class="relative inline-flex rounded-full h-6 w-6 {{ $mesa->status === 'ativo' ? 'bg-green-400 ' : ' bg-gray-500' }}"></span>
                            </span>
                            Mesa N°{{ $mesa->id }}.
                        </p>
                        <a href="#">
                            <button
                                class="ver-button transition ease-in-out delay-150 bg-gradient-to-r from-cyan-500 to-blue-500 hover:-translate-y-1 hover:scale-110 hover:from-from-indigo-500 hover:via-purple-500 hover:to-pink-500 duration-300 px-2 py-1 text-white font-semibold rounded-md"
                                onclick="toggleId({{ $mesa->id }})">
                                Ver
                            </button>
                        </a>
                        <div id="mesa-{{ $mesa->id }}" class="bg-white hidden absolute w-1/2 right-0 ml-8 border text-black">
                            <p>Mesa n°: {{ $mesa->id }}</p>
                            <p>
                                {{-- @if ($produtos->isEmpty())
                                <p>Nenhuma comanda nesta mesa.</p> --}}
                                @foreach ($mesa->comandas as $comanda)
                                    <p>Numero da comanda: {{ $comanda->id }}, Total: {{ $comanda->total }}</p>
                                @endforeach
                            </p>
                        </div>

                    </td>
                @endforeach
            </tr>
        </table>


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

</body>

</html>
