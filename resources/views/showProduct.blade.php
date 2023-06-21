<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ShareStuff</title>
    {{-- <link rel="stylesheet" href="/css/show.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    {{-- perlu ga sih --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="/css/show.css">

</head>
<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <img src="/image/sharestuff.png" style="width:8vw; " alt="">
          {{-- <a class="navbar-brand" href="#">ShareStuff</a> --}}
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">All Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/create-product">Create</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view-buyer">View Buyer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/view-product">View Product</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">History</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="/view-buyer">View Buyer</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="/view-product">View Product</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            {{-- <button type="button" class="btn btn-outline-primary">Log In</button> --}}
            @if(!(Auth::check()))
                <a href="{{ route('login') }}" type="button" class="btn btn-outline-primary">Login</a>
                {{-- <button type="button" class="btn btn-outline-primary">Register</button> --}}
                <a href="{{ route('register') }}" type="button" class="btn btn-outline-primary">Register</a>
                {{-- <p>Welcome back, {{ Auth::user()->name }}!</p> --}}
            @endif
            @if(Auth::check())
              <p class="welcome-back">Welcome back, {{ Auth::user()->name }}!</p>
            @endif

          </div>
        </div>
    </nav>

    {{-- <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="/view-buyer">View Buyer</a>
          <a class="dropdown-item" href="/view-product">View Product</a>
        </div>
    </div> --}}

    <div class="m-5">
        <h1>All Products</h1>
    </div>
    
    {{-- kalo mau tambahin image dibawah div card --}}

    {{-- <div class="m-5">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h2 class="card-title">{{$product->Name}}</h2>
                    <h5 class="card-title">Description : {{$product->Description}}</h3>
                    <h5 class="card-title">Price : {{$product->Price}}</h4>
                    <p class="card-title">Quantity : {{$product->Quantity}}</p>
                    <p class="card-title">Category : {{$product->category->CategoryName}}</p>

                    <a href="{{route('edit', $product->id)}}" class="btn btn-success">Edit</a>

                    <form action="{{route('delete', $product->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div> --}}
    
    <div class="m-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-sm-4">
                    <div class="card" style="width: 18rem;">
                      <img src="{{asset('/storage/image/'.$product->Image)}}" class="card-img-top" alt="...">
                      <div class="card-body">
                            <h2 class="card-title">{{$product->Name}}</h2>
                            <h5 class="card-title">Description : {{$product->Description}}</h3>
                            <h5 class="card-title">Price : {{$product->Price}}</h4>
                            <p class="card-title">Quantity : {{$product->Quantity}}</p>
                            <p class="card-title">Category : {{$product->category->CategoryName}}</p>

                            <a href="{{route('edit', $product->id)}}" class="btn btn-success">Edit</a>

                            <form action="{{route('delete', $product->id)}}" method="POST">
                                {{-- form yg ada action sebisa mgkn pake @csrf for security --}}
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</body>
</html>