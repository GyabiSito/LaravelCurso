<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($users as $user)
        <h1>{{ $user->name }} Roles:</h1>
        <ul>
            @foreach ($user->roles as $role)
                <li>{{ $role->name }} Added by {{ $role->pivot->added_by }} </li>
            @endforeach
        </ul>
    @endforeach
</body>

</html>
