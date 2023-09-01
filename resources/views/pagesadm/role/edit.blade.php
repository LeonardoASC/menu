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
        <form action="{{ route('role.update', ['role' => $role->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="my-4 flex flex-col p-5 items-center">
                <p>Nome do cargo</p>
                <input type="text" name="name" value="{{ $role->name ?? old('name') }}" placeholder=""
                    class=" mb-2 border rounded" />
                    <p class="text-xs  text-gray-500">
                        {{ $errors->has('name') ? $errors->first('name') : '' }}
                    </p>
                <p>Descrição do cargo</p>
                <input type="text" name="description" value="{{ $role->description ?? old('description') }}"
                    placeholder="" class="rounded mb-2 border" />
                    <p class="text-xs  text-gray-500">
                        {{ $errors->has('description') ? $errors->first('description') : '' }}
                    </p>
            </div>
            <div class="flex flex-col ">
                @foreach ($permissions as $permission)
                    <label>
                        <input type="checkbox" @checked($role->hasPermissionTo($permission->id))
                            name="selected_permissions[{{ $permission->id }}]" value="{{ $permission->id }}">
                        - {{ $permission->name }}
                    </label>
                @endforeach
                <p class="text-xs  text-gray-500">
                    {{ $errors->has('selected_permissions') ? $errors->first('selected_permissions') : '' }}
                </p>
            </div>
            <div class="p-5 flex items-center justify-center">
                <button type="submit" class="bg-black p-2 rounded ">Atualizar</button>
            </div>
        </form>
    </div>

</body>

</html>
