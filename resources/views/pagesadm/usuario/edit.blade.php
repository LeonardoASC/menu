<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    {{-- @dd($usuario) --}}
    <form action="{{ route('usuario.update', ['usuario' => $usuario->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="my-4 text-lg flex flex-col p-5">
            <p>Nome do usuario</p>
            <input type="text" name="name" value="{{ $usuario->name ?? old('name') }}" placeholder=""
                class="w-1/3 mb-2 border" />
            <p>Email do usuario</p>
            <input type="text" name="email" value="{{ $usuario->email ?? old('email') }}" placeholder=""
                class="w-1/3 mb-2 border" />
        </div>
        <div class="p-5">
            <button type="submit" class="bg-black">Atualizar</button>
        </div>
    </form>
</body>

</html>
