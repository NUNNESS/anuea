<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Novo Usuario</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $errors )
                <li>{{$errors}}</li>
            @endforeach
        </ul>
        
        
    @endif

    <form action="{{route('users.store')}}" method="POST">
        @csrf()
        <input type="text" name="name" id="" placeholder="nome" value="{{old("name")}}">
        <input type="email" name="email" id="" placeholder="e-mail" value="{{old("email")}}">
        <input type="password" name="password" id="" placeholder="password">
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>