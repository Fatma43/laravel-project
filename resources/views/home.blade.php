<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="{{asset('css/index.css')}}">
    <title>Document</title>
</head>
<body>
    <form class="profile" action="{{route('profile')}}" >
        <button class="pro" type='submit'>My Profile</button>
    </form><br>
    <div class="container">
            <div class="col-10 mx-auto p-4 border mb-5">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Product name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Availability</th>
                            <th scope="col">Category</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
    <tbody>

        @foreach($products as $product)
        <tr>
            <td>{{$product->product_name}}</td>
            <td>{{$product->product_price}}$</td>
            <td>{{$product->product_availability}}</td>
            <td>{{$product->category->name}}</td>
            <td>
                <form action="{{route('usershow',$product->id)}}">
                    <button class="btn" type='submit'>Show</button>
                </form><br>
                <form action="{{route('buy',$product->id)}}">
                    <button class="btn" type='submit'>Buy</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
   </table>
</body>
</html>
