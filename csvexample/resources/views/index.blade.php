<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href={{ route('import') }}>Import CSV</a></li>
                <li><a href={{ route('export') }}>Export CSV</a></li>
            </ul>
        </nav>
    </header>
    <form method="post" action={{ route('import') }} enctype="multipart/form-data">
        <h3>Import CSV</h3>
        @csrf
        <input type="file" name="document_csv"/>
        <button type="submit" value="import CSV">Upload</button>
    </form>
    <main>
        @forelse ($products as $product)
            <article>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <p>{{ $product->price }}</p>
            </article>
        @empty
            <p>No Data</p>
        @endforelse
    </main>
</body>

</html>
