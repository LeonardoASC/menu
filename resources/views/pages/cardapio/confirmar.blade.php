<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">Realizar Tarefa</button>

    <!-- Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmModalLabel">Confirmar Tarefa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Deseja realmente realizar esta tarefa?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <form action="{{ route('realizar-tarefa') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

     {{-- <button
                                                        class="toggleModalButton bg-green-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"
                                                        data-produto-id="{{ $produto->id }}"
                                                        data-produto-nome="{{ $produto->nome }}"
                                                        data-produto-descricao="{{ $produto->descricao }}"
                                                        data-produto-preco="{{ $produto->preco }}">
                                                        pedir</button> --}}
                                                        
       {{-- //modal\\ --}}
        {{--
        <div id="modal" class="hidden fixed inset-0 bg-gray-500 bg-opacity-75  items-center justify-center">
            <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                <div class="fixed inset-0 z-10 overflow-y-auto">
                    <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                        <div
                            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                            <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4 ">
                                <div class="sm:flex sm:items-start">
                                    <div
                                        class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                        <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                    </div>
                                    <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                        <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                            Deseja realmente fazer este pedido?</h3>
                                        <div class="mt-2">
                                            <p class="text-sm text-gray-500"></p>
                                            Detalhes do pedido:
                                            <hr>
                                            <div class="text-sm text-gray-500 relative left-5">
                                                <p>
                                                    Nome do pedido:. <span id="modalNomePedido"></span>
                                                </p>
                                                <p>
                                                    Descrição:. <span id="modalDescricao"></span>
                                                </p>
                                                <p>
                                                    Preço:. <span id="modalPreco"></span>
                                                </p>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="flex items-center justify-end">
                                    <button id="decrementBtn"
                                        class="bg-green-200 text-green-900 hover:bg-green-300 rounded-l-md px-2 py-1">
                                        -
                                    </button>
                                    {{-- <input id="counterInput" name="produto_quantidade" class="w-12 text-center" type="text" value="1"> --}}
                                    {{-- <input id="counterInput" class="w-12 text-center" type="text"
                                        value="1" name="produto_quantidade">

                                    <button id="incrementBtn"
                                        class="bg-green-200 text-green-900 hover:bg-green-300 rounded-r-md px-2 py-1">
                                        +
                                    </button>
                                </div>

                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="button" id="confirmButton"
                                        class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Pedir</button>
                                    <button type="button" id="cancelButton"
                                        class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancelar</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  --}}


{{--
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

            // Adicionar o evento de clique para o botão de decremento
                const decrementBtn = document.getElementById('decrementBtn');
                const incrementBtn = document.getElementById('incrementBtn');
                const counterInput = document.getElementById('counterInput');

                let currentValue = parseInt(counterInput.value, 10);
                console.log(currentValue);
                decrementBtn.addEventListener('click', () => {
                    if (currentValue > 1) {
                        counterInput.value = currentValue - 1;
                    }
                });

                incrementBtn.addEventListener('click', () => {
                    counterInput.value = currentValue + 1;
                });


                const valorFinal = document.getElementsByClassName('produto_quantidade')
                valorFinal.value = currentValue
            // modal
                document.addEventListener('DOMContentLoaded', function() {
                    const toggleModalButtons = document.getElementsByClassName('toggleModalButton');
                    const modal = document.getElementById('modal');
                    const cancelButton = document.getElementById('cancelButton');
                    const confirmButton = document.getElementById('confirmButton');

                    for (let i = 0; i < toggleModalButtons.length; i++) {
                        toggleModalButtons[i].addEventListener('click', function(event) {
                            event.preventDefault();
                            const produtoId = this.getAttribute('data-produto-id');
                            const pedidoForm = document.getElementById('pedidoForm-' + produtoId);
                            modal.classList.remove('hidden');


                            confirmButton.addEventListener('click', function() {
                                pedidoForm.submit();
                                modal.classList.add('hidden');
                            });
                        });
                    }

                    cancelButton.addEventListener('click', function() {
                        modal.classList.add('hidden');
                    });
                });

            // modal com o nome dos produtos
                function openModal(event) {
                    event.preventDefault();
                    const button = event.target;
                    const produtoNome = button.getAttribute('data-produto-nome');
                    const produtoDescricao = button.getAttribute('data-produto-descricao');
                    const produtoPreco = button.getAttribute('data-produto-preco');

                    document.getElementById('modalNomePedido').innerText = produtoNome;
                    document.getElementById('modalDescricao').innerText = produtoDescricao;
                    document.getElementById('modalPreco').innerText = `R$ ${produtoPreco}`;


                }

                document.addEventListener('DOMContentLoaded', function() {
                    const toggleModalButtons = document.getElementsByClassName('toggleModalButton');

                    for (let i = 0; i < toggleModalButtons.length; i++) {
                        toggleModalButtons[i].addEventListener('click', openModal);
                    }
                });


        </script>
 --}}
</body>
</html>
