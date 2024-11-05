<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{route('users.create')}}">Novo</a>
        @if (session()->has('success'))
            
                {{session('success')}}
            
        @endif


    <h1>Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>NOME</th> 
                <th>EMAIL</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>-</td>
                </tr>
            @empty
            <tr>
                <td colspan="1000">Nenhum usuario no banco</td>   
            </tr>    
            @endforelse
        </tbody>
    </table>
    {{$users->links()}}
</body>
</html>