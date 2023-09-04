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
    <x-navbarheader />
    <div class="bg-white p-8 rounded-md  ml-14 pt-14 mb-10 md:ml-64">
        <div class=" flex items-center justify-between pb-6 mt-2 w-1/2">
            <h1 class="text-gray-600 font-bold">Produtos</h1>
            <div class="flex bg-gray-50 items-center p-2 rounded-md">
                <form action="{{ route('produto.index') }}" method="GET" class="flex items-center">
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

            <div class="lg: space-x-8">
                <a href="{{ route('produto.create') }}">
                    <button class="bg-green-600 px-4 py-2 rounded-md text-white font-semibold cursor-pointer">Cadastrar
                        produto</button>
                </a>
            </div>
        </div>

        <div>
            <div class="-mx-4 w-full sm:-mx-8 py-4 overflow-x-auto">
                <div class="inline-block  rounded overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Produto
                                </th>
                                <th
                                    class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Categoria
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
                        @if ($produtos->isEmpty())
                            <p>Nenhum produto encontrado.</p>
                        @else
                            @foreach ($produtos as $produto)
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
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $produto->categoria->nome }}
                                            </p>
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
                                        <td class="px-5 py-5 border-b border-gray-200  bg-white text-sm">
                                            <div class="flex gap-2">
                                                <a href="{{ route('produto.edit', ['produto' => $produto->id]) }}"
                                                    class="border p-2 rounded-lg hover:bg-slate-200">Editar</a>

                                                <form action="{{ route('produto.destroy', $produto->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="text-gray-700 border p-2 rounded-lg hover:bg-slate-200"
                                                        type="submit">Excluir</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
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
