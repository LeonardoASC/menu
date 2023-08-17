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
    <div class="p-5">
        <div class="mb-5 font-bold">Selecione as permissoes do cargo x</div>
        <form action="{{ route('permission.store') }}" method="POST" class="flex flex-col">
            @csrf
           

            <button class="border p-1 text-black rounded-xl w-20" type="submit">Enviar</button>
        </form>
    </div>
</body>

</html>
