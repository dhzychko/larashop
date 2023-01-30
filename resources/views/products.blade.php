<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All products</title>
</head>
<body>
    <div class="main">
        <h1 class="heading">All products</h1>
        <ul>
            @foreach($products as $product)
                <p>
                    <p>{{ $product->name }}</p>
                    <a href="{{$product->image}}">link to product #{{ $product->id }} image</a>
                </p>
            @endforeach
        </ul>
    </div>

</body>
</html>