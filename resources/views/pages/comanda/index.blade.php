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

    <!-- component -->
    <div class="h-screen w-full flex flex-col overflow-hidden bg-white select-none">
        {{-- <main class="">
            @foreach ($pedidosEntregues as $pedidosEntregue)
                <tr>
                    Bem vindo, {{ session('nome') }}
                    <br>
                    cpf: {{ session('cpf') }}
                    <br>
                    <td>Id: {{ $pedidosEntregue->cliente_id }} |</td>
                    <td>{{ $pedidosEntregue->nome }} |</td>
                    <td>{{ $pedidosEntregue->quantidade }} |</td>
                    <td>{{ $pedidosEntregue->preco }} |</td>
                    <td>{{ $pedidosEntregue->status }} |</td>
                    <br>
                </tr>
            @endforeach
        </main> --}}
        <div class="p-3 flex flex-col" id="cliente-info">
            <p class=" text-sm">
                Bem vindo Sr.{{ session('nome') }}, o que deseja pedir?
            </p>
            <div class="flex">
                <p class=" text-xs pr-2">
                    cpf:{{ session('cpf') }}
                    Mesa: {{ session('idmesa') }}
                </p>
                <p class=" text-xs pl-2">
                    comanda: {{ session('idcomanda') }}
                </p>
            </div>
        </div>

        <aside
            class="w-full px-6 py-4 flex flex-col  dark:bg-black
		    dark:text-gray-400 rounded-r-lg overflow-y-auto">
            <!-- Right side NavBar -->

            <div class="mt-12 flex items-center">
                <!-- Payments -->
                <span>Pedidos entregues</span>
                <button class="ml-2 focus:outline-none">
                    <svg class="h-5 w-5 fill-current" viewBox="0 0 256 512">
                        <path
                            d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9
                    0l-22.6-22.6c-9.4-9.4-9.4-24.6
                    0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3
						103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1
						34z">
                        </path>
                    </svg>
                </button>
            </div>

            {{-- @dd($pedidosEntregues) --}}
            @php
                $total = 0; // variável para manter o valor total
                $garcom10 = 0; // variável para manter o valor total
                $TotalFinal = 0; // variável para manter o valor total
            @endphp

            {{-- vai por fora do foreach --}}
            @if ($pedidosEntregues->isEmpty())
                <p class="p-4 text-center italic">Nenhum pedido foi feito ainda.</p>
            @else
                @foreach ($pedidosEntregues->take(3) as $pedidosEntregue)

                    <a href=""class="mt-8 p-4 flex justify-between bg-gray-100 rounded-lg font-semibold capitalize">
                        <div class="flex">
                            <img class="h-10 w-10 rounded-full object-cover" src="https://classic.exame.com/wp-content/uploads/2020/05/mafe-studio-LV2p9Utbkbw-unsplash-1.jpg?quality=70&strip=info&w=1024" alt="veldora profile" />
                            <div class="flex flex-col ml-4">
                                <span>{{ $pedidosEntregue->nome }}</span>
                                <span class="text-sm text-gray-600">{{ $pedidosEntregue->quantidade }}x</span>
                            </div>
                        </div>
                        <span>R$ {{ $pedidosEntregue->preco }}</span>
                    </a>

                    @php
                        $total += $pedidosEntregue->preco * $pedidosEntregue->quantidade; // atualiza o valor total
                        $garcom10 = intval(($total * 10) / 100);
                        $cover = 10;
                        $TotalFinal = $total + $cover + $garcom10;
                    @endphp
                @endforeach
            @endif

            <div id="itensRestantes" class="hidden">
                @foreach ($pedidosEntregues->skip(4) as $pedidosEntregue)

                    <div class="mt-8 p-4 flex  justify-between bg-gray-100 rounded-lg font-semibold capitalize">
                        <div class="flex">
                            <img class="h-10 w-10 rounded-full object-cover" src="https://classic.exame.com/wp-content/uploads/2020/05/mafe-studio-LV2p9Utbkbw-unsplash-1.jpg?quality=70&strip=info&w=1024" alt="veldora profile" />
                            <div class="flex flex-col ml-4">
                                <span>{{ $pedidosEntregue->nome }}</span>
                                <span class="text-sm text-gray-600">{{ $pedidosEntregue->quantidade }}x</span>
                            </div>
                        </div>
                        <span>R$ {{ $pedidosEntregue->preco }}</span>
                    </div>
                    @endforeach
                </div>


                @if ($pedidosEntregues->count() > 4)
                <button id="verMaisBtn" class="mt-4 flex justify-center items-center flex-col capitalize text-blue-600 bg-white">

                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="#000000" viewBox="0 0 256 256"><path d="M112,60a16,16,0,1,1,16,16A16,16,0,0,1,112,60Zm16,52a16,16,0,1,0,16,16A16,16,0,0,0,128,112Zm0,68a16,16,0,1,0,16,16A16,16,0,0,0,128,180Z"></path></svg>
                    Ver Todos!
                </button>
            @endif


            <div class="flex flex-col">
                <div class="flex justify-between">
                    <span class="mt-4 text-gray-600">Sub-Total:</span>
                    <span class="mt-4 text-gray-600">{{ $total }}</span>
                </div>

                <span class="mt-4 text-gray-600 text-sm">Taxa de {...}:</span>
                <div class="flex justify-between">
                    <span class=" text-gray-600 text-xs pl-3">10% Garçom:</span>
                    <span class=" text-gray-600 text-xs pl-3 ">R$ {{ $garcom10 }}</span>
                </div>

                <div class="flex justify-between">
                    <span class=" text-gray-600 text-xs pl-3">Cover da noite:</span>
                    <span class=" text-gray-600 text-xs pl-3">R$ 10</span>
                </div>

                <span class="mt-4 text-gray-600 font-bold">Total:</span>
            </div>

            <span class="mt-1 text-3xl font-semibold">$ {{ $TotalFinal }}</span>

                <form action="{{ route('comanda.update', session('idcomanda')) }}" method="post">
                    @csrf
                    @method('PUT')
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <button type="submit"
                            class="mt-8 flex items-center py-4 px-3 text-white rounded-lg bg-green-400 shadow focus:outline-none">
                            <svg class="h-5 w-5 fill-current mr-2 ml-3" viewBox="0 0 24 24">
                                <path
                                    d="M9 16.17l-3.59-3.59a.996.996 0 1 0-1.41 1.41l4.24 4.24c.39.39 1.02.39 1.41 0L20.41 9.7a.996.996 0 1 0-1.41-1.41L9 16.17z" />
                            </svg>
                            <span>Finalizar COMANDA!</span>
                        </button>
                        <input type="hidden" name="total" value="{{ $TotalFinal }}">
                        <input type="hidden" name="cliente_id_total" value=" {{ $pedidosEntregue->cliente_id }}">
                        <input type="hidden" name="mesa_id_total" value="1">
                    </td>
                </form>


        </aside>

    </div>
    <x-rodape />
    <script>
        // Script para mostrar/ocultar os itens restantes ao clicar no botão "Ver mais"
        document.getElementById('verMaisBtn').addEventListener('click', function() {
            document.getElementById('itensRestantes').classList.toggle('hidden');
        });
    </script>
</body>

</html>
