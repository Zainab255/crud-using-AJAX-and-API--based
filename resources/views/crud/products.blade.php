<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1 class="text-success text-center">All Products</h1>

        <a href="{{ route('add_product') }}" class="btn btn-outline-secondary my-4">Add Product</a>

<br>

        <table class="table table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($product_detail as $value)
                    <tr>

                        <td>{{ $value->id }}</td>
                        <td>{{ $value->product_name }}</td>
                        <td>{{ $value->price }}</td>
                        <td>{{ $value->description }}</td>
                        <td>
                            <a href="{{ url('/edit/' . $value->id) }}" class="btn btn-outline-success">Edit</a>
                            <a href="{{ url('/delete/' . $value->id) }}" class="btn btn-success">Delete</a>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
