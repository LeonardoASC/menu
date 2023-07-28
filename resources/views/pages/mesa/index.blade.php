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


    <div class=" bg-white w-full">
        <p class=" text-gray-600 mb-2 text-2xl font-thin px-4 pt-3 ">Mesas</p>
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
                                    <button class="border text-white rounded-md px-1 py-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="#000000" viewBox="0 0 256 256">
                                            <path
                                                d="M230.14,70.54,185.46,25.85a20,20,0,0,0-28.29,0L33.86,149.17A19.85,19.85,0,0,0,28,163.31V208a20,20,0,0,0,20,20H92.69a19.86,19.86,0,0,0,14.14-5.86L230.14,98.82a20,20,0,0,0,0-28.28ZM91,204H52V165l84-84,39,39ZM192,103,153,64l18.34-18.34,39,39Z">
                                            </path>
                                        </svg>
                                    </button>
                                </a>
                                <form method="POST" action="{{ route('mesa.destroy', ['mesa' => $mesa->id]) }}">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"
                                        class="border bg-red-400 text-white rounded-md px-1 py-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                            fill="#000000" viewBox="0 0 256 256">
                                            <path
                                                d="M216,48H180V36A28,28,0,0,0,152,8H104A28,28,0,0,0,76,36V48H40a12,12,0,0,0,0,24h4V208a20,20,0,0,0,20,20H192a20,20,0,0,0,20-20V72h4a12,12,0,0,0,0-24ZM100,36a4,4,0,0,1,4-4h48a4,4,0,0,1,4,4V48H100Zm88,168H68V72H188ZM116,104v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Zm48,0v64a12,12,0,0,1-24,0V104a12,12,0,0,1,24,0Z">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                                <button
                                    class="transition ease-in-out delay-150 bg-gradient-to-r from-cyan-500 to-blue-500 hover:-translate-y-1 hover:scale-110 hover:from-from-indigo-500 hover:via-purple-500 hover:to-pink-500 duration-300 px-1 py-1 text-white font-semibold rounded-md"
                                    onclick="toggleId({{ $mesa->id }})">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000"
                                        viewBox="0 0 256 256">
                                        <path
                                            d="M251,123.13c-.37-.81-9.13-20.26-28.48-39.61C196.63,57.67,164,44,128,44S59.37,57.67,33.51,83.52C14.16,102.87,5.4,122.32,5,123.13a12.08,12.08,0,0,0,0,9.75c.37.82,9.13,20.26,28.49,39.61C59.37,198.34,92,212,128,212s68.63-13.66,94.48-39.51c19.36-19.35,28.12-38.79,28.49-39.61A12.08,12.08,0,0,0,251,123.13Zm-46.06,33C183.47,177.27,157.59,188,128,188s-55.47-10.73-76.91-31.88A130.36,130.36,0,0,1,29.52,128,130.45,130.45,0,0,1,51.09,99.89C72.54,78.73,98.41,68,128,68s55.46,10.73,76.91,31.89A130.36,130.36,0,0,1,226.48,128,130.45,130.45,0,0,1,204.91,156.12ZM128,84a44,44,0,1,0,44,44A44.05,44.05,0,0,0,128,84Zm0,64a20,20,0,1,1,20-20A20,20,0,0,1,128,148Z">
                                        </path>
                                    </svg>
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
                                        <p>Numero da comanda: {{ $comanda->id }}, Total: {{ $comanda->total }}</p>
                                    @endforeach
                                @endif
                            </p>
                        </div>
                    </td>
                @endforeach
            </tr>
        </table>


    </div>
    <a href="{{ route('mesa.create') }}">
        <button type="button" class="border bg-primary text-white rounded-md px-4 py-2 m-2 select-none">
            Adicionar Mesa
        </button>
    </a>
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
