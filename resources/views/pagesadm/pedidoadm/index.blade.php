<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>

    @foreach ($pedidos as $pedido)
    <div>
        <div class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
            nome: {{ $pedido->nome }}
            <br>
            Quantidade: {{ $pedido->quantidade }}x
            <br>
            obs: {{ $pedido->observacao }}
        </div>

        <div class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
            Nome do cliente:
            <br>

        </div>





        <div class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
            <form id="pedidoForm-{{ $pedido->id }}" action="{{ route('pedido.update', ['pedido' => $pedido]) }}" method="post">
                @csrf
                @method('PATCH')
                <button class="toggleModalButton bg-green-400 px-4 py-2 rounded-md text-white font-semibold divacking-wide cursor-pointer"
                        data-produto-id="{{ $pedido->id }}">Entregar pedido</button>
                <input type="hidden" name="pedido_status" value="Entregue">
            </form>
        </div>
    </div>
@endforeach


<div class="">
    <div class="flex justify-center py-2 bg-white border-b shadow-md mb-1 rounded-xl">
        <h2>Estamos preparando os pedidos para voce!</h2>
    </div>
    @if ($pedidos->isEmpty())
        <p class="text-center p-2 m-2">Nenhum pedido por aqui.</p>
    @else
        @foreach ($pedidos as $pedido)
            <ul role="list" class="divide-y divide-gray-100 p-5">
                <li class="flex flex-col justify-between gap-x-6 py-5 border rounded-3xl shadow-md p-4 bg-white">
                    <div class="flex gap-x-4">
                        <img class="h-12 w-12 flex-none rounded-full bg-gray-50"
                            src="https://classic.exame.com/wp-content/uploads/2020/05/mafe-studio-LV2p9Utbkbw-unsplash-1.jpg?quality=70&strip=info&w=1024"
                            alt="">
                        <div class="min-w-0 flex-auto">
                            <div class="flex justify-between">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $pedido->nome }} - {{ $pedido->quantidade }}x</p>
                                <p class="text-sm font-semibold leading-6 text-gray-900">R$ {{ $pedido->preco }}</p>
                            </div>
                            <div class="flex justify-between">
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $pedido->cliente->nome }}</p>
                                <p class="text-sm font-semibold leading-6 text-gray-900">Mesa: {{ $pedido->comanda->mesa_id }}</p>

                            </div>
                            <p class="text-sm font-semibold leading-6 text-gray-900">CPF: {{ $pedido->cliente->cpf }}</p>
                            <p class="text-sm font-semibold leading-6 text-gray-900"></p>
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500"> {{ $pedido->observacao }}Observação do pedido aqui</p>
                        <div class="flex items-center justify-between">
                            <div class="text-sm leading-6 text-gray-900 mr-2">{{ $pedido->status }}
                            {{-- <div class="w-4 h-4  flex justify-center items-center rounded-full bg-gradient-to-t from-green-400 to-gray-100 animate-spin">
                                <div class="w-3 h-3 bg-gray-100 rounded-full"></div>
                            </div> --}}
                        </div>
                            <p class="text-sm leading-6 text-gray-900 mr-2">numero do pedido: {{ $pedido->id }}</p>
                        </div>
                    </div>
                    </div>

                    <div class="">
                        <form id="pedidoForm-{{ $pedido->id }}" action="{{ route('pedido.update', ['pedido' => $pedido]) }}" method="post">
                            @csrf
                            @method('PATCH')
                        <div class="text-sm flex justify-center mt-2">
                            <button class="toggleModalButton bg-green-400 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"
                            data-produto-id="{{ $pedido->id }}">Entregar pedido</button>
                            <input type="hidden" name="pedido_status" value="Entregue">
                        </div>
                            </form>
                    </div>
                </li>
            </ul>
        @endforeach
    @endif
</div>
</body>

</html>
