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
    <div class="flex flex-col justify-center items-center h-screen bg-white">
        <h1 class="text-lg font-semibold border p-2 rounded">Editar cargo e suas permissões</h1>
        <form action="{{ route('produto.update', ['produto' => $produto->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="my-4 flex flex-col p-5 items-center">
                <p>Nome do produto</p>
                <input type="text" name="nome" value="{{ $produto->nome ?? old('nome') }}" placeholder=""
                    class=" mb-2 border rounded" />
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('nome') ? $errors->first('nome') : '' }}
                </p>

                <p>Descrição</p>
                <input type="text" name="descricao" value="{{ $produto->descricao ?? old('descricao') }}"
                    placeholder="" class="rounded mb-2 border" />
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
                </p>

                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">Categoria do produto</label>
                <select
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-indigo-500"
                    name="categoria_id">
                    <option class="text-zinc-400" placeholder="categoria">-- Selecione --</option>
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}"
                            {{ ($produto->categoria_id ?? old('categoria_id')) == $categoria->id ? 'selected' : '' }}>
                            {{ $categoria->nome }}</option>
                    @endforeach
                </select>
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('categoria_id') ? $errors->first('categoria_id') : '' }}
                </p>

                <p>Preço</p>
                <input type="text" name="preco" value="{{ $produto->preco ?? old('preco') }}" placeholder=""
                    class="rounded mb-2 border" />
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('preco') ? $errors->first('preco') : '' }}
                </p>

                <p>Imagem</p>
                <input type="text" name="imagem" value="{{ $produto->imagem ?? old('imagem') }}" placeholder=""
                    class="rounded mb-2 border" />
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('imagem') ? $errors->first('imagem') : '' }}
                </p>
            </div>

            <div class="p-5 flex items-center justify-center">
                <button type="submit" class="bg-black p-2 rounded ">Atualizar</button>
            </div>
        </form>
    </div>

</body>

</html>
