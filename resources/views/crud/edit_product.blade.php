<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-success text-center">Edit Products</h1>
    <div class="container">
        <form action="{{route('update')}}">
            @csrf
            <div class="row g-3 align-items-center">

                <input type="number" name="id" id="id" value="{{$product_detail->id}}" hidden>

                <div class="col-12">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" id="name" name="product_name" class="form-control" value="{{$product_detail->product_name}}">
                </div>

                <div class="col-12">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{$product_detail->price}}">
                </div>

                <div class="col-12">
                    <label for="description" class="form-label">Description</label>
                    <textarea id="description" name="description" class="form-control" rows="5">{{$product_detail->description}}</textarea>
                </div>

                <div class="col-12">
                    <input type="submit" value="Update Product" class="btn btn-success">
                </div>

            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
