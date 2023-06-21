<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="m-5">
        <h1>View Product</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Qty</th>
                <th scope="col">Buyer</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$product->Name}}</td>
                        <td>{{$product->Quantity}}</td>
                        <td>
                            {{-- foraech lagi krn memungkinkan 1 produk dibeli >1 buyer --}}
                            {{-- kenapa ga lgsg $product->buyers --}}
                            {{-- krn dia bakal munculin semuanya --}}
                            @foreach ($product->buyers as $item)
                                - {{$item->BuyerName}} <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>