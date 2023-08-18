<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    {{-- toastr --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


</head>

<body>
    {{-- <x-caminho /> --}}
    <div class=" p-2 rounded-md w-full flex flex-col">
        <div class="justify-between w-full flex flex-col">
            <div class="flex items-center">
            <div
                class="ml-4 mt-2 flex bg-gray-50 items-center w-4/5 rounded-xl border-solid border-2 p-2 justify-between">
                <form action="{{ route('cardapio.index') }}" method="GET" class="flex w-full  items-center">
                    <input class="bg-gray-50 outline-none ml-1  w-full text-xs" type="text" name="termo"
                        placeholder="O que voce gostaria de pedir hoje?" value="{{ $termo }}">

                </form>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#CACACA"
                    viewBox="0 0 256 256">
                    <path
                        d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z">
                    </path>
                </svg>
            </div>
            <div class="ml-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#000000" viewBox="0 0 256 256"><path d="M166,112a6,6,0,0,1-6,6H96a6,6,0,0,1,0-12h64A6,6,0,0,1,166,112Zm-6,26H96a6,6,0,0,0,0,12h64a6,6,0,0,0,0-12Zm70-10A102,102,0,0,1,79.31,217.65L44.44,229.27a14,14,0,0,1-17.71-17.71l11.62-34.87A102,102,0,1,1,230,128Zm-12,0A90,90,0,1,0,50.08,173.06a6,6,0,0,1,.5,4.91L38.12,215.35a2,2,0,0,0,2.53,2.53L78,205.42a6.2,6.2,0,0,1,1.9-.31,6.09,6.09,0,0,1,3,.81A90,90,0,0,0,218,128Z"></path></svg>
            </div>
        </div>
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

            <div class="flex flex-col">
                <div class="flex flex-col">
                    <div class="inline-block min-w-full overflow-hidden p-2 flex">
                        <form action="{{ route('cardapio.index') }}" method="GET" id="filtroForm"
                            class="flex items-center rounded-md p-2 gap-4 min-w-full overflow-x-auto">
                            <button type="submit" name="categoriaId" value=""
                                class="text-zinc-400  @if (empty(request('categoriaId'))) text-zinc-700 font-semibold underline underline-offset-8 @endif">Todos</button>

                            @foreach ($categorias as $categoria)
                                <button type="submit" name="categoriaId" value="{{ $categoria->id }}"
                                    class="text-zinc-400
                                @if (request('categoriaId') == $categoria->id) text-zinc-700 font-semibold underline underline-offset-8 @endif">{{ $categoria->nome }}</button>
                            @endforeach
                        </form>
                    </div>
                </div>
            </div>


            <hr>

            <div>
                <div class="px-4 sm:px-8 py-4 overflow-x-auto 0">
                    <div class="inline-block min-w-full overflow-hidden ">
                        <table class="min-w-full leading-normal ">
                            @if ($produtos->isEmpty())
                                <p>Nenhum produto encontrado.</p>
                            @else
                                @foreach ($produtos as $produto)
                                    <thead>
                                        <tr>
                                            <th>
                                                {{-- class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase"> --}}
                                                {{-- {{ $produto->categoria->nome }} --}}
                                            </th>
                                            <th {{-- class=" px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-right text-xs font-semibold text-gray-600 uppercase " --}}>
                                                {{-- Preço --}}
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr onclick="submitForm({{ $produto->id }})"
                                            class="cursor-pointer">
                                            <td class="py-2">
                                                <div class="flex items-center">
                                                    <div class="flex-shrink-0 w-28 h-28 absolute z-10">
                                                        <img class="w-full h-full rounded-full bg-slate-600 drop-shadow-2xl"
                                                            src="{{ $produto->imagem }}" alt="" />
                                                    </div>
                                                    <div
                                                        class="border rounded-3xl p-5 pl-10 flex w-[80%] h-40 translate-x-16 bg-white shadow-sm shadow-red-100">
                                                        <div class="ml-3">
                                                            <p class="text-gray-900 text-base mb-2 text-center">
                                                                {{ $produto->nome }}
                                                            </p>
                                                            <div class="flex items-center justify-between px-4 ">
                                                                <p class="text-gray-500 text-xs w-2/3">
                                                                    {{ $produto->descricao }}
                                                                </p>
                                                                <div class="h-16 bg-gray-100 w-1 mx-2"></div>
                                                                <p class="text-gray-900 text-center">
                                                                    R${{ $produto->preco }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>



                                            <form id="pedidoForm-{{ $produto->id }}"
                                                action="{{ route('cardapio.create', ['produto_id' => $produto->id]) }}"
                                                method="GET">
                                                @csrf
                                                <div class="w-full" onclick="submitForm({{ $produto->id }})">
                                                        <input type="hidden" name="produto_id"
                                                            value="{{ $produto->id }}">
                                                        <input type="hidden" name="produto_nome"
                                                            value="{{ $produto->nome }}">
                                                        <input type="hidden" name="produto_quantidade" value="1">
                                                        <input type="hidden" name="produto_status" value="Solicitado">
                                                        <input type="hidden" name="produto_preco"
                                                            value="{{ $produto->preco }}">
                                                        <input type="hidden" name="produto_descricao"
                                                            value="{{ $produto->descricao }}">
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
    </div>
    <x-rodape />


    {{-- Toastr --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        @if (Session::has('message'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif
    </script>
    <script>
        // function handleCategoryFilter(categoryId) {
        //     const filtroForm = document.getElementById('filtroForm');
        //     const categoriaIdInput = document.querySelector('input[name="categoriaId"]');

        //     if (categoriaIdInput.value === categoryId) {
        //         // If the selected category is already active, reset the value to empty and remove the "selected" class
        //         categoriaIdInput.value = '';
        //     } else {
        //         // Otherwise, set the selected category and add the "selected" class to the button
        //         categoriaIdInput.value = categoryId;
        //         document.querySelector(`button[value="${categoryId}"]`).class.add('bg-blue-400');
        //     }

        //     filtroForm.submit();
        // }

        function submitForm(produtoId) {
            const form = document.getElementById(`pedidoForm-${produtoId}`);
            form.submit();
        }

        //
    </script>

</body>

</html>
