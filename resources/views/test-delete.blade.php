<!DOCTYPE html>
<html>
<head>
    <title>Test Delete</title>
</head>
<body>
    <h2>Test Delete Product</h2>

    <p>Product: {{ $product->name }}</p>

    <form method="POST" action="/product/{{ $product->id }}">
        @csrf
        @method('DELETE')

        <button type="submit">Delete Product</button>
    </form>
</body>
</html>