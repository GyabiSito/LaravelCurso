<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('search-post') }}">
        @csrf
        <input type="text" name="name" placeholder="Type to search" value="{{old('')}}">
        <button type="submit">Search</button>
    </form>
</body>

</html>
