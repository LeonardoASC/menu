<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    @vite('resources/css/app.css')
</head>

<body>
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
                                    <p class="text-sm font-semibold leading-6 text-gray-900">{{ $pedido->nome }}</p>
                                    <p class="text-sm font-semibold leading-6 text-gray-900">R$ {{ $pedido->preco }}</p>
                                </div>
                                <p class="text-sm font-semibold leading-6 text-gray-900">{{ $pedido->quantidade }}x</p>
                                <p class="mt-1 truncate text-xs leading-5 text-gray-500"> {{ $pedido->observacao }}Observação do pedido aqui</p>
                            <div class="flex items-center">
                                <p class="text-sm leading-6 text-gray-900 mr-2">{{ $pedido->status }}</p>
                                <div class="w-4 h-4  flex justify-center items-center rounded-full bg-gradient-to-t from-green-400 to-gray-100 animate-spin">
                                    <div class="w-3 h-3 bg-gray-100 rounded-full"></div>
                                </div>
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
                                <input type="hidden" name="pedido_valor" value="{{ $pedido->preco }}">
                            </div>
                                </form>
                        </div>
                    </li>
                </ul>
            @endforeach
        @endif
</div>
    {{-- //modal\\ --}}
    <div id="modal"
        class="hidden fixed inset-0 bg-gray-500 bg-opacity-75  items-center justify-center">
    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity">
        </div>
        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div
                                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-green-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                    Deseja realmente entregar esse pedidosa?</h3>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="button" id="confirmButton"
                            class="inline-flex w-full justify-center rounded-md bg-green-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Entregar</button>
                        <button type="button" id="cancelButton"
                            class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <x-rodape />

    <script>
        //modal
        document.addEventListener('DOMContentLoaded', function() {
            const toggleModalButtons = document.getElementsByClassName('toggleModalButton');
            const modal = document.getElementById('modal');
            const cancelButton = document.getElementById('cancelButton');
            const confirmButton = document.getElementById('confirmButton');

            for (let i = 0; i < toggleModalButtons.length; i++) {
                toggleModalButtons[i].addEventListener('click', function(event) {
                    event.preventDefault();
                    const pedidoID = this.getAttribute('data-produto-id');
                    const pedidoForm = document.getElementById('pedidoForm-' + pedidoID);
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
    </script>
    </body>

</html>
