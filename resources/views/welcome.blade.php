<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    <!-- CSS do Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

<!-- JS do Bootstrap (opcional, somente se você precisar dos componentes JavaScript) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</head>

<body>
    <x-caminho />



    <div class="bg-blueGray-300">
        <div class="py-12">
            <div class="my-12 container mx-auto px-4">
                <div class="mb-12 flex flex-wrap -mx-4 justify-center">
                    <div class="px-4 relative w-full lg:w-8/12 text-center">
                        <h6 class="mb-2 text-lg font-bold uppercase text-blueGray-200">Bem Vindo </h6>
                        <h2 class="text-4xl font-bold mt-0 mb-1 text-black">Coloque seu CPF para gerar uma comanda</h2>
                        <p class="mt-2 mb-4 text-xl leading-relaxed text-red-500 opacity-100 font-bold">Nao feche o
                            navegador!</p>
                        <p class="mt-2 mb-4 text-xl leading-relaxed text-black opacity-75">Caso ocorra um de nossos
                            colaboradores ira auxilia-lo imadiatamente!</p>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-4">
                    <div class="mx-auto px-4 relative w-full lg:w-7/12 w-10/12">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full shadow-lg rounded-lg">
                            <div class="px-5 py-3 flex-auto">
                                <form method="post"
                                action="{{ route('cliente.store') }}"
                                class="my-0">
                                    @csrf
                                    <div class="flex flex-wrap -mx-4">
                                        <div class="px-4 relative w-full sm:w-8/12 pt-4">
                                            <div class="relative flex w-full flex-wrap items-stretch mb-3"><span
                                                    class="z-10 h-full flex absolute text-center text-blueGray-300 text-sm items-center w-8 pl-3"><i
                                                        class="fa fa-envelope"></i></span>
                                                        <input
                                                        placeholder="Digite seu Nome"
                                                        class="border-blueGray-300 px-3 py-2 m-1 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200 pl-10 "
                                                        type="text" id="name" name="nome"
                                                        value="{{ $cliente->nome ?? old('nome') }}"
                                                        >
                                                        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                                                        <input
                                                        placeholder="Digite seu CPF"
                                                        class="border-blueGray-300 px-3 py-2 m-1 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none focus:ring focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200 pl-10 "
                                                        type="number" id="name" pattern="[0-9]*" name="cpf"
                                                        value="{{ $cliente->cpf ?? old('cpf') }}"
                                                        >
                                                        {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}
                                            </div>
                                        </div>
                                        <div class="px-4 sm:pl-0 flex w-full sm:w-4/12 text-right pt-4">

                                            <button
                                                class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-white bg-pink-500 border-pink-500 active:bg-pink-600 active:border-pink-600 text-sm px-6 py-2 shadow hover:shadow-lg rounded-md w-full text-center"
                                                type="submit"
                                                >
                                                Gerar Comanda
                                            </button>
                                            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p class="mt-2 mb-4 text-xl leading-relaxed text-black opacity-75">Ao efetuar o pagamento da
                            comanda o seu CPF sera retirado do sistema!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


{{-- meu modal --}}
    {{-- <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <!--
          Background backdrop, show/hide based on modal state.

          Entering: "ease-out duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in duration-200"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
          <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <!--
              Modal panel, show/hide based on modal state.

              Entering: "ease-out duration-300"
                From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                To: "opacity-100 translate-y-0 sm:scale-100"
              Leaving: "ease-in duration-200"
                From: "opacity-100 translate-y-0 sm:scale-100"
                To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
            -->
            <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
              <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                    </svg>
                  </div>
                  <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                    <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Deactivate account</h3>
                    <div class="mt-2">
                      <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <button type="button" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">Deactivate</button>
                <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">Cancel</button>
              </div>
            </div>
          </div>
        </div>

      </div> --}}

</body>

</html>
