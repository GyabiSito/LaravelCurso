<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('index')}}">Back to Index</a>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="text" name="name" placeholder="Name">
        <input type="file" name="file" placeholder="File">
        <button type="submit" name="send">Submit</button>
    </form>
</body>
</html>
