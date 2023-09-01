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

    <div class="flex flex-col justify-center items-center h-screen">
        <h1 class="text-lg font-semibold p-2 rounded">Editar Usuario</h1>
        <form action="{{ route('usuario.update', ['usuario' => $usuario->id]) }}" method="post"
            class="bg-white p-8 rounded-md shadow-md flex flex-col justify-center items-center"
            >
            @csrf
            @method('PUT')
            <div class="my-4 flex flex-col p-5 justify-center items-center">
                <p>Nome do usuario</p>
                <input type="text" name="name" value="{{ $usuario->name ?? old('name') }}" placeholder=""
                    class="mb-2 rounded border" />
                    <p class="text-xs  text-gray-500">
                        {{ $errors->has('name') ? $errors->first('name') : '' }}
                    </p>
                <p>Email do usuario</p>
                <input type="text" name="email" value="{{ $usuario->email ?? old('email') }}" placeholder=""
                    class="mb-2 border rounded" />
                    <p class="text-xs  text-gray-500">
                        {{ $errors->has('email') ? $errors->first('email') : '' }}
                    </p>
            </div>
            <div class="p-5 flex justify-center items-center">
                <button type="submit" class="bg-black p-2 rounded ">Atualizar</button>
            </div>
        </form>
    </div>

</body>

</html>
