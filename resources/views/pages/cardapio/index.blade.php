
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
    <x-caminho />
    <div class="bg-white p-8 rounded-md w-full">
        <div class=" flex items-center justify-between pb-6">
            <div>
                <h1 class="text-gray-600 font-bold">Produto</h1>
            </div>
            <div id="cliente-info">
                Bem vindo, {{ session('nome') }}
                cpf: {{ session('cpf') }}
            </div>
            <div class="flex items-center justify-between">

                <div class="flex bg-gray-50 items-center p-2 rounded-md">
                    <form action="{{ route('cardapio.index') }}" method="GET" class="flex items-center">
                        <div class="mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input class="bg-gray-50 outline-none ml-1 block" type="text" name="termo"
                            placeholder="Pesquisar..." value="{{ $termo }}">
                        <button type="button" id="limpar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M14.348 14.849l-1.5 1.5L10 11.5l-2.849 2.849-1.5-1.5L8.5 10 5.651 7.151l1.5-1.5L10 8.5l2.849-2.849 1.5 1.5L11.5 10l2.849 2.849z" />
                            </svg>
                        </button>
                    </form>
                </div>


                <form action="{{ route('cardapio.index') }}" method="GET">
                    <select name="categoriaId">
                        <option value="">Todas as categorias</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}" {{ $categoriaId == $categoria->id ? 'selected' : '' }}>
                                {{ $categoria->nome }}
                            </option>
                        @endforeach
                    </select>
                    <button type="submit">Buscar</button>
                </form>
                {{-- @dd($categoriaId) --}}



                <div class="lg:ml-40 ml-10 space-x-8">
                    <a href="{{ route('pedido.index') }}">
                        <button
                            class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                            Carrinho
                        </button>
                    </a>
                    <a href="{{ route('comanda.index') }}">
                        <button
                            class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                            Comanda
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">

                        @if ($produtos->isEmpty())
                            <p>Nenhum produto encontrado.</p>
                        @else
                            @foreach ($produtos as $produto)
                                <thead>
                                    <tr>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            {{ $produto->categoria->nome }}
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Descrição
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                            Preço
                                        </th>
                                        <th
                                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">

                                        </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 w-10 h-10">
                                                    <img class="w-full h-full rounded-full"
                                                        src="https://classic.exame.com/wp-content/uploads/2020/05/mafe-studio-LV2p9Utbkbw-unsplash-1.jpg?quality=70&strip=info&w=1024"
                                                        alt="" />
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-gray-900 whitespace-no-wrap"> {{ $produto->nome }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $produto->descricao }}
                                            </p>
                                        </td>

                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                R${{ $produto->preco }}
                                            </p>
                                        </td>

                                        <form id="pedidoForm" action="{{ route('pedido.store') }}" method="POST">
                                            @csrf
                                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                                <button type="submit"
                                                    class="toggleModalButton bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">Pedir</button>
                                                <input type="hidden" name="produto_nome" value="{{ $produto->nome }}">
                                                <input type="hidden" name="produto_quantidade" value="1">
                                                <input type="hidden" name="produto_status" value="Solicitado">
                                                <input type="hidden" name="produto_preco"
                                                    value="{{ $produto->preco }}">
                                                <input type="hidden" name="produto_descricao"
                                                    value="{{ $produto->descricao }}">
                                            </td>

                                        </form>
                                    </tr>
                                </tbody>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>

        </div>

        {{-- <div id="myModal" class="modalMacro" style="display: none">
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                            Voce realmente deseja realizar este pedido ?</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500">Detalhes do pedido {
                                                }.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="button"
                                    class="toggleModalButton inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-green-500 sm:ml-3 sm:w-auto">Pedir</button>
                                <button type="button"
                                    class="toggleModalButton mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancelar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
    </div>

    <script>
        //apagar o registro da pesquisa
        document.addEventListener("DOMContentLoaded", function() {
            var input = document.querySelector("input[name='termo']");
            var button = document.getElementById("limpar");

            input.addEventListener("keydown", function(event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    input.form.submit();
                }
            });

            button.addEventListener("click", function(event) {
                input.value = "";
                input.form.submit();
            });
        });

    </script>
</body>

</html>
