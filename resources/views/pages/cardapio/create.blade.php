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
    <div class="flex flex-col justify-end h-screen w-full ">
        <div class="flex-1">
            {{-- Tamanho bom para imagem - 414 x 425 --}}
                <svg class="absolute mt-5 ml-5" xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="#000000"
                    viewBox="0 0 256 256"
                    type="button" id="cancelButton"
                    onclick="window.history.back()">
                    <path
                        d="M208,36H48A12,12,0,0,0,36,48V208a12,12,0,0,0,12,12H208a12,12,0,0,0,12-12V48A12,12,0,0,0,208,36Zm4,172a4,4,0,0,1-4,4H48a4,4,0,0,1-4-4V48a4,4,0,0,1,4-4H208a4,4,0,0,1,4,4Zm-40-80a4,4,0,0,1-4,4H97.66l25.17,25.17a4,4,0,0,1-5.66,5.66l-32-32a4,4,0,0,1,0-5.66l32-32a4,4,0,0,1,5.66,5.66L97.66,124H168A4,4,0,0,1,172,128Z">
                    </path>
                </svg>

            <img src="https://img.freepik.com/fotos-gratis/hamburguer-duplo-isolado-no-fundo-branco-hamburguer-fresco-fast-food-com-carne-e-queijo-creme_90220-1192.jpg?w=826&t=st=1690994558~exp=1690995158~hmac=1d6b80114efa9e59b5cb1df587e99cfd31ed3f20b88267e54d37331699a4d2a6"
                alt="Imagem" class="w-full h-full object-cover"

                />
        </div>
        <div class="bg-white px-7 pb-5 pt-6 w-full drop-shadow-2xl rounded-t-3xl flex-1">
            <div class="mb-5">
                <h1 class="text-3xl font-bold">{{ $produto->nome }}</h1>
            </div>

            <div class="w-full mb-5 flex justify-between items-center">
                <div class="text-xl flex items-end">
                    <span class="mr-1 text-amber-500">R$</span>
                    <div class="text-3xl text-amber-500">{{ floor($produto->preco) . '.' }}</div>
                    @if ($produto->preco != floor($produto->preco))
                        <div class="flex items-end text-amber-500">{{ substr(number_format($produto->preco, 2), -2) }}
                        </div>
                    @endif
                </div>
                <div class="flex bg-amber-100 rounded-full p-1">
                    <button id="decrementBtn"
                        class="bg-amber-400 text-white hover:bg-amber-00 rounded-full  w-10 h-10 justify-center items-center flex"
                        onclick="decrementarContador()">
                        -
                    </button>
                    <input id="counterInput" name="produto_quantidade" class="w-12 text-center text-lg bg-amber-100"
                        type="text" value="1" oninput="atualizarCampoEscondido()">

                    <button id="incrementBtn"
                        class="bg-amber-400 text-white hover:bg-amber-300 rounded-full w-10 h-10 justify-center items-center flex"
                        onclick="incrementarContador()">
                        +
                    </button>
                </div>
            </div>
            <div class="mb-8 text-center">
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
                            class="text-sm text-zinc-500 border border-amber-300 w-full h-20 rounded-3xl p-2"
                            placeholder="Exemplo: 2 copos, gelo e limao, Sem tomate..."></textarea>
                    </td>
                </div>
                {{-- @dd($produto->quantidade) --}}
                <div class="">
                    <button type="submit" id="confirmButton"
                        class="inline-flex w-full justify-center rounded-3xl bg-amber-400 px-3 py-5 text-xl font-semibold text-white shadow-sm mt-5">Pedir</button>

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
