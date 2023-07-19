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
                    <div class="mx-auto px-4 relative w-full lg:w-7/12 ">
                        <div class="relative flex flex-col min-w-0 break-words bg-white w-full shadow-lg rounded-lg">
                            <div class="px-5 py-10 flex items-center justify-between">
                                <form method="post" action="{{ route('cliente.store') }}" class="flex items-center justify-between w-full gap-4">
                                    @csrf
                                    <div class="flex justify-center items-center w-full gap-4">
                                        <div class="flex items-center justify-center flex-col w-full">
                                            <span
                                                class="z-10 h-full flex absolute text-center text-blueGray-300 text-sm items-center w-8 pl-3"><i
                                                    class="fa fa-envelope"></i></span>
                                            <input placeholder="Digite seu Nome"
                                                class="border-blueGray-300 px-3 py-2 m-1 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none  focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200 pl-10 "
                                                type="text" id="name" name="nome"
                                                value="{{ $cliente->nome ?? old('nome') }}">
                                            {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                                            <input placeholder="Digite seu CPF"
                                                class="border-blueGray-300 px-3 py-2 m-1 text-sm  w-full placeholder-blueGray-200 text-blueGray-700 relative bg-white rounded-md outline-none  focus:ring-lightBlue-500 focus:ring-1 focus:border-lightBlue-500 border border-solid transition duration-200 pl-10 "
                                                type="number" id="name" pattern="[0-9]*" name="cpf"
                                                value="{{ $cliente->cpf ?? old('cpf') }}">
                                            {{ $errors->has('cpf') ? $errors->first('cpf') : '' }}
                                        </div>
                                        <div class="h-full">

                                            <button
                                                class="inline-block outline-none focus:outline-none align-middle transition-all duration-150 ease-in-out uppercase border border-solid font-bold last:mr-0 mr-2  text-white bg-pink-500 border-pink-500 active:bg-pink-600 active:border-pink-600 text-sm px-6 py-2 shadow hover:shadow-lg rounded-md w-full text-center only:"
                                                type="submit">
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



</body>

</html>
