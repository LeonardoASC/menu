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
        <div class="w-full px-4 mx-auto border bg-white">
            <div class="relative flex flex-col mt-10 border break-words w-full shadow-lg rounded bg-white">
                <div class="rounded-t px-4 py-3 border-0 ">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700 ">
                                 - / - / - Pedidos em espera - \ - \ -
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <table class="items-center w-full border-collapse text-blueGray-700  ">

                        <thead class="thead-light">
                            <tr>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">

                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">

                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">

                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">

                                </th>
                                <th
                                    class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">

                                </th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($pedidos as $pedido)
                            <tr>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left">
                                   nome: {{ $pedido->nome }}
                                    <br>
                                   Quantidade: {{ $pedido->quantidade }}x
                                    <br>
                                    obs: {{ $pedido->observacao }}
                                </td>

                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">

                                    {{ $pedido->cliente->nome }}
                                    <br>
                                    {{ $pedido->cliente->cpf }}
                                </td>
                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $pedido->status }}
                                    @dd($pedido->mesa)
                                    {{$pedido->mesa->mesa_id}}
                                </td>
                                <td>
                                    numero do pedido: {{$pedido->id}}
                                </td>


                            <form id="pedidoForm-{{ $pedido->id }}" action="{{ route('pedido.update', ['pedido' => $pedido]) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                    <button class="toggleModalButton bg-green-400 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer"
                                    data-produto-id="{{ $pedido->id }}">Entregar pedido</button>
                                    <input type="hidden" name="pedido_status" value="Entregue">
                                </td>
                            </form>
                            </tr> @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- //modal\\ --}}
        <div id="modal"
        class="hidden fixed inset-0 bg-gray-500 bg-opacity-75  items-center justify-center">
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
                                <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                    Deseja realmente fazer este pedido?</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500">Are you sure you want to deactivate your
                                        account? All of your data will be permanently removed. This action
                                        cannot be
                                        undone.</p>
                                </div>
                            </div>
                        </div>
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
