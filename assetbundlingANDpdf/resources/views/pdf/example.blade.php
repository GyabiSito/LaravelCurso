<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            color: red;
        }
        .page-break{
            page-break-after: always;
        }
    </style>
</head>
<body>
    <h1>Hello World {{$name}}</h1>
    <div class="page-break"></div>
    <h1>Hello World In Other Page {{$name}}</h1>
</body>
</html>
