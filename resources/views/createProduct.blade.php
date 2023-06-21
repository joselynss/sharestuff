<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareStuff</title>
    {{-- <link rel="stylesheet" href="/css/create.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    
</head>
<body>
    {{-- <nav>
        <div class="container">
            <div class="logo">
                <img src="/image/sharestuff.png" alt="">
                <a href="#hero">ShareStuff</a>
            </div>
            <div class="nav-content">
                <a href="#hero">Home</a>
                <a href="#categories">Categories</a>
                <a href="#about-us">Featured</a>
                <a href="/create-product">Add</a>
            </div>
        </div>
    </nav> --}}
    
    <div class="m-5">
        <h1>Add Product</h1>
    </div>

    <div class="m-5">
        <form action="/store-product" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- untuk security --}}
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputPassword1" name="Name">
              </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="Description">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Price</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Price">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="exampleInputPassword1" name="Quantity">
            </div>
            {{-- input dropdown , cari di bootstrap : select --}}
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Category</label>
                <select class="form-select" aria-label="Default select example" name="CategoryName">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->CategoryName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control @error('Image') is-invalid @enderror" type="file" id="formFile" name="Image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/show-product" class="btn btn-danger">Cancel</a>

        </form>
    </div>
</body>
</html>