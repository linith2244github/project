<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Product List</h2>
        <a href="{{ route("create") }}" class="btn btn-sm btn-primary">Add More</a>
        <table class="table table-bordered table-hover text-center mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Product ID</th>
                    <th>Product Image</th>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->image }}</td>
                        <td>{{  $product->product_name }}</td>
                        <td>{{"$ ". $product->price }}</td>
                        <td>{{ number_format($product->quantity, 2) }}</td>
                        <td>
                            {{-- <form action="{{ route('destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Remove</button>
                            </form> --}}
                            <a href="{{ route("destroy", $product->id) }}" class="btn btn-sm btn-danger">Remove</a>
                            {{-- <a href="{{ url('product/destroy/'.$product->id) }}"
                                onclick="return confirm('Are you sure?')"
                                class="btn btn-danger btn-sm">
                                Remove
                            </a> --}}
                            <a href="{{ route('edit', $product->id) }}" class="btn btn-sm btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>