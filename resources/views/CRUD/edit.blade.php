<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3>Edit Product</h3>
        <form action="{{ route('update', $product->id) }}" class="p-5 shadow-none" method="POST">
            @csrf
            <div class="from-group mb-3">
                <label for="name">Product Name : </label>
                <input type="text" class="form-control shadow-none" name="product_name" value="{{ $product->product_name }}" required>
            </div>
            <div class="from-group mb-3">
                <label for="price">Product Price : </label>
                <input type="text" class="form-control shadow-none" name="product_price" value="{{ $product->price }}" required>
            </div>
            <div class="from-group mb-3">
                <label for="qty">Product Quantity : </label>
                <input type="number" class="form-control shadow-none" name="product_qty" value="{{ $product->quantity }}" required>
            </div>
            <div class="from-group mb-3">
                <label for="image">Product Image : </label>
                <input type="file" class="form-control shadow-none" name="product_image" value="{{ $product->image }}" required>
            </div>

            <button class="btn btn-sm btn-success" type="submit">Update</button>
            <a href="{{ route('read') }}" class="btn btn-sm btn-danger">Back</a>
        </form>
    </div>
</body>
</html>