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
    <div class="flex flex-col justify-end h-screen w-full bg-black">
        <div class="bg-white px-7 pb-5 pt-6 w-full border rounded-t-3xl absolute">
            <div class="mb-5">
                <h1 class="text-3xl">{{ $produto->nome }}</h1>
            </div>

            <div class="w-full mb-5 flex justify-between items-center">
                <div class="text-xl">
                    {{ $produto->preco }}
                </div>
                <div class="flex bg-green-200 rounded-full p-1">
                    <button id="decrementBtn"
                        class="bg-green-600 text-green-900 hover:bg-green-00 rounded-full  w-10 h-10 justify-center items-center flex"
                        onclick="decrementarContador()">
                        -
                    </button>
                    <input id="counterInput" name="produto_quantidade" class="w-12 text-center bg-green-200" type="text"
                        value="1" oninput="atualizarCampoEscondido()">

                    <button id="incrementBtn"
                        class="bg-green-600 text-green-900 hover:bg-green-300 rounded-full w-10 h-10 justify-center items-center flex"
                        onclick="incrementarContador()">
                        +
                    </button>
                </div>
            </div>
            <div class="mb-5 text-center">
                {{ $produto->descricao }}
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
                        <textarea name="pedido_observacao" id="" cols="30" rows="10"
                            class="text-sm text-zinc-500 border w-full h-20 rounded-3xl p-2" placeholder="Exemplo: 2 copos, gelo e limao, Sem tomate..."></textarea>
                    </td>
                </div>
                {{-- @dd($produto->quantidade) --}}
                <div class="">
                    <button type="submit" id="confirmButton"
                        class="inline-flex w-full justify-center rounded-3xl bg-green-600 px-3 py-5 text-sm font-semibold text-white shadow-sm mt-5">Pedir</button>
                    <button type="button" id="cancelButton"
                        class="text-orange-500"
                        onclick="window.history.back()">Cancelar</button>
                </div>
            </form>

            <form action="{{ route('comanda.update', session('idcomanda')) }}" method="post">
                @csrf
                @method('PUT')
                <input type="hidden" name="atualiza_preco" value="{{ $produto->preco }}">
            </form>

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
