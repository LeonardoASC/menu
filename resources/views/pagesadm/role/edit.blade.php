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

    <form action="" method="post">
        @csrf
        @method('PUT')
        {{-- @dd($cargo) --}}
        <div class="my-4 text-lg flex flex-col">
            <p>Nome do cargo</p>
            <input type="text" name="name" value="{{ $role ?? old('name') }}"
                placeholder="" class="w-1/3 mb-2 border" />
                <p>Descrição do cargo</p>
            <input type="text" name="description" value="{{ $role ?? old('description') }}"
                placeholder="" class="w-1/3 mb-2 border" />
        </div>
        <div class="">
            <button type="submit" class="bg-black">Atualizar</button>
        </div>
    </form>

</body>

</html>
