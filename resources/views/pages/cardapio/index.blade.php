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
    {{-- <x-caminho /> --}}
    <div class="bg-white p-2 rounded-md w-full flex flex-col">
        <div class="justify-between pb-6 w-full flex flex-col">
            <div
                class="flex bg-gray-50 items-center w-4/5 rounded-xl border-solid border-2 p-2 border-[#e0cdc7] justify-between">
                <form action="{{ route('cardapio.index') }}" method="GET" class="flex w-full  items-center">
                    <input class="bg-gray-50 outline-none ml-1  w-full text-xs" type="text" name="termo"
                        placeholder="O que voce gostaria de pedir hoje?" value="{{ $termo }}">
                    {{-- <button type="button" id="limpar">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M14.348 14.849l-1.5 1.5L10 11.5l-2.849 2.849-1.5-1.5L8.5 10 5.651 7.151l1.5-1.5L10 8.5l2.849-2.849 1.5 1.5L11.5 10l2.849 2.849z" />
                        </svg>
                    </button> --}}
                </form>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#CACACA"
                    viewBox="0 0 256 256">
                    <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                    </path>
                </svg>
            </div>

            <div class="p-3 flex flex-col" id="cliente-info">
                <p class=" text-sm">
                    Bem vindo, {{ session('nome') }}
                </p>
                <p class="text-sm">
                    cpf: {{ session('cpf') }}
                </p>
            </div>

            <div class="lg:ml-40 ml-10 space-x-8">
                <a href="{{ route('pedido.index') }}">
                    <button
                        class="bg-green-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                        Carrinho
                    </button>
                </a>
                <a href="{{ route('comanda.index') }}">
                    <button
                        class="bg-green-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                        Comanda
                    </button>
                </a>
            </div>
            <div class="flex flex-col">
                <div class="flex flex-col">
                    <div class="inline-block min-w-full overflow-hidden p-2">
                        <form action="{{ route('cardapio.index') }}" method="GET" id="filtroForm"
                            class="flex items-center rounded-md p-2 gap-2 min-w-full overflow-x-auto">
                            <button type="submit" name="categoriaId" value="" class="text-gray-500"
                                onclick="handleCategoryFilter('')">Todos</button>
                            @foreach ($categorias as $categoria)
                                <button type="submit" name="categoriaId" value="{{ $categoria->id }}"
                                    class="text-gray-400"
                                    onclick="handleCategoryFilter('{{ $categoria->id }}')">{{ $categoria->nome }}</button>
                            @endforeach
                        </form>


                    </div>
                </div>
            </div>

            <div>
                <div class="px-4 sm:px-8 py-4 overflow-x-auto 0">
                    <div class="inline-block min-w-full shadow rounded-lg overflow-hidden ">
                        <table class="min-w-full leading-normal ">
                            @if ($produtos->isEmpty())
                                <p>Nenhum produto encontrado.</p>
                            @else
                                @foreach ($produtos as $produto)
                                    <thead>
                                        <tr >
                                            <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">
                                                {{ $produto->categoria->nome }}
                                            </th>
                                            {{-- <th
                                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase">

                                            </th> --}}
                                            <th
                                                class=" px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase ">
                                                Preço
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr onclick="submitForm({{ $produto->id }})"
                                            class="cursor-pointer transition-all duration-300 hover:bg-green-500">
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-10 h-10">
                                                        <img class="w-full h-full rounded-full"
                                                            src="https://classic.exame.com/wp-content/uploads/2020/05/mafe-studio-LV2p9Utbkbw-unsplash-1.jpg?quality=70&strip=info&w=1024"
                                                            alt="" />
                                                    </div>
                                                    <div class="ml-3">
                                                        <p class="text-gray-900 ">
                                                            {{ $produto->nome }}
                                                        </p>
                                                        <p class="text-gray-500 ">
                                                            {{ $produto->descricao }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>

                                            {{-- <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <p class="text-gray-900 whitespace-no-wrap">

                                                </p>
                                            </td> --}}

                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-right">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    R${{ $produto->preco }}
                                                </p>
                                            </td>

                                            <form id="pedidoForm-{{ $produto->id }}"
                                                action="{{ route('pedido.store') }}" method="POST">
                                                @csrf
                                                <div class="w-full" onclick="submitForm({{ $produto->id }})">
                                                    <td
                                                        class=" border-b border-gray-200 bg-white text-sm cursor-pointer">

                                                        <input type="hidden"
                                                            name="produto_nome"value="{{ $produto->nome }}">
                                                        <input type="hidden" name="produto_quantidade" value="1">
                                                        <input type="hidden" name="produto_status" value="Solicitado">
                                                        <input type="hidden" name="produto_preco"
                                                            value="{{ $produto->preco }}">
                                                        <input type="hidden" name="produto_descricao"
                                                            value="{{ $produto->descricao }}">
                                                    </td>
                                                </div>
                                            </form>
                                        </tr>
                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>

        </div>

        <script>
            function handleCategoryFilter(categoryId) {
                const filtroForm = document.getElementById('filtroForm');
                const categoriaIdInput = document.querySelector('input[name="categoriaId"]');

                if (categoriaIdInput.value === categoryId) {
                    // If the selected category is already active, reset the value to empty and remove the "selected" class
                    categoriaIdInput.value = '';
                } else {
                    // Otherwise, set the selected category and add the "selected" class to the button
                    categoriaIdInput.value = categoryId;
                    document.querySelector(`button[value="${categoryId}"]`).class.add('bg-blue-400');
                }

                filtroForm.submit();
            }

            function submitForm(produtoId) {
                const form = document.getElementById(`pedidoForm-${produtoId}`);
                form.submit();
            }





        </script>
</body>

</html>
