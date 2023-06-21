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
        <h1>View Buyer</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Book</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($buyers as $buyer)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$buyer->BuyerName}}</td>
                        <td>
                            {{-- foraech lagi krn memungkinkan 1 buyer beli >1 buku --}}
                            {{-- kenapa ga lgsg $buyer->books --}}
                            {{-- krn dia bakal munculin semuanya --}}
                            @foreach ($buyer->products as $item)
                                - {{$item->Name}} <br>
                            @endforeach
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>