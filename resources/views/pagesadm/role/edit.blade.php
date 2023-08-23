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

    <form action="{{ route('role.update', ['role' => $role->id]) }}" method="post">
        @csrf
        @method('PUT')
        {{-- @dd($role) --}}
        <div class="my-4 text-lg flex flex-col p-5">
            <p>Nome do cargo</p>
            <input type="text" name="name" value="{{ $role->name ?? old('name') }}"
                placeholder="" class="w-1/3 mb-2 border" />
                <p>Descrição do cargo</p>
            <input type="text" name="description" value="{{ $role->description ?? old('description') }}"
                placeholder="" class="w-1/3 mb-2 border" />
        </div>
        <div class="p-5">
            <button type="submit" class="bg-black">Atualizar</button>
        </div>
        <div class="flex flex-col">
            @foreach ($permissions as $permission)
            <label >
                <input type="checkbox" @checked($role->hasPermissionTo($permission->id)) name="selected_permissions[{{$permission->id}}]" value="{{ $permission->id }}">
               - {{ $permission->name }}
            </label>
        @endforeach
        </div>
    </form>

</body>

</html>
