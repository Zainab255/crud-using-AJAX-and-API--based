<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-success text-center">Add Products</h1>
    <div class="container">
        <form action="{{ route('store') }}" method="POST">
            @csrf
            <div class="row g-3 align-items-center">

                <input type="number" id="id" name="id" hidden>

                <div class="col-12">
                    <label for="name" class="form-label">Product Name</label><br>
                    <input type="text" id="name" name="product_name" class="form-control">
                </div>

                <div class="col-12">
                    <label for="price" class="form-label">Price</label><br>
                    <input type="number" id="price" name="price" class="form-control">
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Description</label><br>
                    <textarea id="description" name="description" class="form-control" rows="5"></textarea>
                </div>

                <div class="col-12">
                    <input type="submit" value="Add Product" class="btn btn-success">
                </div>

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
