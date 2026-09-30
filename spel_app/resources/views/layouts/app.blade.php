<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Spel App</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <nav>
        <a href="{{ url('/') }}">Home</a>
        |
        <a href="{{ route('categories.index') }}">Categories</a>
        |
        <a href="{{ route('products.index') }}">Products</a>
         | <a href="{{ route('reviews.index') }}">Reviews</a>
    </nav>

    <hr>

    <main>
        @yield('content')
    </main>

</body>
</html>