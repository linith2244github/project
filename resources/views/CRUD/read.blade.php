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
        <a href="product/create" class="btn btn-sm btn-primary">Add More</a>
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
                <td>P001</td>
                <td>image.jpg</td>
                <td>I Phone 17 Pro Max</td>
                <td>$1</td>
                <td>10</td>
                <td>
                    <button class="btn btn-sm btn-danger" type="submit">Remove</button>
                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                </td>
            </tbody>
        </table>
    </div>
</body>
</html>