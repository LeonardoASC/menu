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

    <div id="modal" class="fixed inset-0 bg-gray-500 bg-opacity-75  items-center justify-center">
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div class="flex min-h-fit items-end justify-center p-4 text-center sm:items-center sm:p-0">
                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                        <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4 ">
                            <div class="sm:flex sm:items-start">
                                <div
                                    class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                    <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                    </svg>
                                </div>
                                <div class="mt-3 sm:ml-4 sm:mt-0 sm:text-left">
                                    <h3 class="text-base text-center font-semibold leading-6 text-gray-900" id="modal-title">
                                        Deseja realmente fazer este pedido?</h3>
                                    <div class="mt-2">
                                        <p class="text-center text-gray-500">
                                        Detalhes do pedido:</p>
                                        <hr>
                                        <div class="text-sm text-gray-500 flex flex-col justify-start ">
                                            <p>
                                                Nome do pedido:. {{$produto->nome}}
                                            </p>
                                            <p>
                                                Descrição:. {{$produto->descricao}}
                                            </p>
                                            <p>
                                                Preço:. {{$produto->preco}}
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>



                            <div class="flex items-center justify-end">
                                <button id="decrementBtn" class="bg-green-200 text-green-900 hover:bg-green-300 rounded-l-md px-2 py-1" onclick="decrementarContador()">
                                    -
                                </button>
                                <input id="counterInput" name="produto_quantidade" class="w-12 text-center" type="text" value="1" oninput="atualizarCampoEscondido()">

                                <button id="incrementBtn" class="bg-green-200 text-green-900 hover:bg-green-300 rounded-r-md px-2 py-1" onclick="incrementarContador()">
                                    +
                                </button>
                            </div>

                            {{-- @dd($produto) --}}
                            <form action="{{ route('pedido.store', ['produto' => $produto]) }}" method="post">
                                @csrf
                                <div class="w-full">
                                    <td class="border-b border-gray-200 bg-white text-sm cursor-pointer">
                                        <input type="hidden" name="produto_id" value="{{ $produto->id }}">
                                        <input type="hidden" name="produto_nome" value="{{ $produto->nome }}">
                                        <input type="hidden" id="campoEscondidoQuantidade" name="produto_quantidade" value="1">
                                        <input type="hidden" name="produto_status" value="Solicitado">
                                        <input type="hidden" name="produto_preco" value="{{ $produto->preco }}">
                                        <input type="hidden" name="produto_descricao" value="{{ $produto->descricao }}">
                                        <textarea name="pedido_observacao" id="" cols="30" rows="10" class="text-sm text-zinc-500 border w-full" placeholder="Exemplo: 2 copos, gelo e limao, Sem tomate..."></textarea>
                                    </td>
                                </div>
                                {{-- @dd($produto->quantidade) --}}
                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                <button type="submit" id="confirmButton"
                                    class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Pedir</button>
                                <button type="button" id="cancelButton"
                                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" onclick="window.history.back()">Cancelar</button>
                                </div>
                            </form>

                            <form action="{{ route('comanda.update', session('idcomanda'))}}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="atualiza_preco" value="{{ $produto->preco }}">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function atualizarCampoEscondido() {
            var valorCounterInput = document.getElementById("counterInput").value;
            document.getElementById("campoEscondidoQuantidade").value = valorCounterInput;
        }

        function incrementarContador() {
            var valorCounterInput = document.getElementById("counterInput").value;
            var novoValor = parseInt(valorCounterInput) + 1;
            document.getElementById("counterInput").value = novoValor;
            atualizarCampoEscondido(); // Atualize o campo escondido também após incrementar.
        }

        function decrementarContador() {
            var valorCounterInput = document.getElementById("counterInput").value;
            var novoValor = parseInt(valorCounterInput) - 1;
            if (novoValor < 1) {
                novoValor = 1; // Evitar valores negativos
            }
            document.getElementById("counterInput").value = novoValor;
            atualizarCampoEscondido(); // Atualize o campo escondido também após decrementar.
        }
    </script>



</body>

</html>
