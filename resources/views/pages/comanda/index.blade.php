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
    <div class="h-screen w-full flex overflow-hidden select-none">
        <nav class="w-24 flex flex-col items-center bg-gray-200 dark:bg-gray-800 py-4">
            <!-- Left side NavBar -->

            <div>
                <!-- App Logo -->
                <svg class="h-8 w-8 fill-current text-blue-600 dark:text-blue-300" viewBox="0 0 24 24">
                    <path
                        d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3m6.82
					6L12 12.72 5.18 9 12 5.28 18.82 9M17 16l-5 2.72L7 16v-3.73L12
					15l5-2.73V16z">
                    </path>
                </svg>

            </div>

            <ul class="mt-2 text-gray-700 dark:text-gray-400 capitalize">
                <!-- Links -->

                <li class="mt-3 p-2 text-blue-600 dark:text-blue-300 rounded-lg">
                    <a href="#" class=" flex flex-col items-center">
                        <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                            <path
                                d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9
							17v2H5v-2h4M21 3h-8v6h8V3M11 3H3v10h8V3m10
							8h-8v10h8V11m-10 4H3v6h8v-6z">
                            </path>
                        </svg>
                        <span class="text-xs mt-2">dashBoard</span>
                    </a>

                </li>

                <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
				rounded-lg">
                    <a href="#" class=" flex flex-col items-center">
                        <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3v-.5a2.5 2.5 0 00-5 0V3c-.55 0-1 .45-1 1v4c0
							.55.45 1 1 1h5c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1m-1
							0h-3v-.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V3M6
							11h9v2H6v-2m0-4h9v2H6V7m16 4v5c0 1.11-.89 2-2 2H6l-4
							4V4a2 2 0 012-2h11v2H4v13.17L5.17 16H20v-5h2z">
                            </path>
                        </svg>
                        <span class="text-xs mt-2">messages</span>
                    </a>

                </li>

                <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
				rounded-lg">
                    <a href="#" class=" flex flex-col items-center">
                        <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                            <path
                                d="M21 18v1a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0
							012-2h14a2 2 0 012 2v1h-9a2 2 0 00-2 2v8a2 2 0 002
							2m0-2h10V8H12m4 5.5a1.5 1.5 0 01-1.5-1.5 1.5 1.5 0
							011.5-1.5 1.5 1.5 0 011.5 1.5 1.5 1.5 0 01-1.5 1.5z">
                            </path>
                        </svg>
                        <span class="text-xs mt-2">earnings</span>
                    </a>

                </li>

                <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
				rounded-lg">
                    <a href="#" class=" flex flex-col items-center">
                        <svg class="fill-current h-5 w-5" viewBox="0 0 512 512">
                            <path
                                d="M505 442.7L405.3
							343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7
							44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208
							208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7
							17l99.7 99.7c9.4 9.4 24.6 9.4 33.9
							0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7
							0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128
							57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg>
                        <span class="text-xs mt-2">jobs</span>
                    </a>

                </li>

                <li class="mt-3 p-2 hover:text-blue-600 dark-hover:text-blue-300
				rounded-lg">
                    <a href="#" class=" flex flex-col items-center">
                        <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                            <path
                                d="M19 19H5V8h14m0-5h-1V1h-2v2H8V1H6v2H5a2 2 0 00-2
							2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2m-2.47
							8.06L15.47 10l-4.88 4.88-2.12-2.12-1.06 1.06L10.59
							17l5.94-5.94z">
                            </path>
                        </svg>
                        <span class="text-xs mt-2">schedule</span>
                    </a>

                </li>

                <li class="mt-3 p-2 hover:text-blue-600 rounded-lg">
                    <a href="#" class=" flex flex-col items-center">
                        <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                            <path
                                d="M17 10.5V7a1 1 0 00-1-1H4a1 1 0 00-1 1v10a1 1 0
							001 1h12a1 1 0 001-1v-3.5l4 4v-11l-4 4z">
                            </path>
                        </svg>
                        <span class="text-xs mt-2">lesson</span>
                    </a>

                </li>

            </ul>

            <div class="mt-auto flex items-center p-2 text-blue-700 bg-purple-200
			dark:text-blue-500 rounded-full">
                <!-- important action -->

                <a href="#">
                    <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                        <path
                            d="M12 1c-5 0-9 4-9 9v7a3 3 0 003 3h3v-8H5v-2a7 7 0 017-7
						7 7 0 017 7v2h-4v8h4v1h-7v2h6a3 3 0
						003-3V10c0-5-4.03-9-9-9z">
                        </path>
                    </svg>
                </a>

            </div>

        </nav>

        <main
            class="my-1 pt-2 pb-2 px-10 flex-1 bg-white-200 dark:bg-black rounded-l-lg
		transition duration-500 ease-in-out overflow-y-auto">
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
        </main>

        <aside
            class="w-1/4 my-1 mr-1 px-6 py-4 flex flex-col bg-gray-200 dark:bg-black
		    dark:text-gray-400 rounded-r-lg overflow-y-auto">
            <!-- Right side NavBar -->

            <div class="flex items-center justify-between">
                <!-- Info -->

                <div class="flex">
                    <a href="{{ route('pedido.index') }}">
                        <button class="mr-2 bg-green-400 px-2 py-1 rounded-md text-white font-semibold cursor-pointer">
                            Carrinho
                        </button>
                    </a>
                    <a href="{{ route('cardapio.index') }}">
                        <button class="bg-green-400 px-2 py-1 rounded-md text-white font-semibold cursor-pointer">
                            Cardapio
                        </button>
                    </a>
                </div>

                <div class="flex items-center">
                    <!-- Right side -->

                    <img class="h-10 w-10 rounded-full object-cover"
                        src="https://i.pinimg.com/originals/68/e1/e1/68e1e137959d363f172dc3cc50904669.jpg"
                        alt="tempest profile" />

                    <button class="ml-1 focus:outline-none">

                        <svg class="h-4 w-4 fill-current" viewBox="0 0 192 512">
                            <path
                                d="M96 184c39.8 0 72 32.2 72 72s-32.2 72-72
							72-72-32.2-72-72 32.2-72 72-72zM24 80c0 39.8 32.2 72
							72 72s72-32.2 72-72S135.8 8 96 8 24 40.2 24 80zm0
							352c0 39.8 32.2 72 72 72s72-32.2
							72-72-32.2-72-72-72-72 32.2-72 72z">
                            </path>
                        </svg>

                    </button>

                </div>

            </div>

            <div class="mt-12 flex items-center">
                <!-- Payments -->
                <span>Pedidos</span>
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


            @php
                $total = 0; // variável para manter o valor total
            @endphp
            @foreach ($pedidosEntregues as $pedidosEntregue)
                <a href="#"
                    class="mt-8 p-4 flex justify-between bg-gray-300 rounded-lg
			font-semibold capitalize">
                    <!-- link -->
                    <div class="flex">
                        <img class="h-10 w-10 rounded-full object-cover"
                            src="https://lh3.googleusercontent.com/cX0xwvJKCNIFrl2wIwoYiIURxmZt1y7tF3wJvynqcnQG5tmYdKBLpDDvhXzmVZzrstAEkw=s151"
                            alt="veldora profile" />
                        <div class="flex flex-col ml-4">
                            <span>{{ $pedidosEntregue->nome }}</span>
                            <span class="text-sm text-gray-600">{{ $pedidosEntregue->quantidade }}x</span>
                        </div>
                    </div>
                    <span>$ {{ $pedidosEntregue->preco }}</span>
                </a>
                @php
                    $total += $pedidosEntregue->preco; // atualiza o valor total
                @endphp
            @endforeach
            <div class="mt-4 flex justify-center capitalize text-blue-600">
                <a href="#" id="verTodos">Ver Todos!</a>
            </div>
            <span class="mt-4 text-gray-600">Total:</span>


            <span class="mt-1 text-3xl font-semibold">$ {{ $total }}</span>






            <form action="{{ route('comanda.store', ['total' => $total]) }}" method="post">
                @csrf
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                    <button type="submit"
                        class="mt-8 flex items-center py-4 px-3 text-white rounded-lg bg-green-400 shadow focus:outline-none">
                        <svg class="h-5 w-5 fill-current mr-2 ml-3" viewBox="0 0 24 24">
                            <path
                                d="M9 16.17l-3.59-3.59a.996.996 0 1 0-1.41 1.41l4.24 4.24c.39.39 1.02.39 1.41 0L20.41 9.7a.996.996 0 1 0-1.41-1.41L9 16.17z" />
                        </svg>
                        <span>Finalizar COMANDA!</span>
                    </button>
                    <input type="hidden" name="total" value="{{$total}}">
                    <input type="hidden" name="cliente_id_total" value="1">
                    <input type="hidden" name="mesa_id_total" value="1">
                </td>
            </form>



        </aside>

    </div>
    <x-rodape />
</body>

</html>
