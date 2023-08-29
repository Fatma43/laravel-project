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
   <span> <p>Name:      {{$user->name}}</p></span>
   <span> <p>Email:      {{$user->email}}</p></span>
   <div class="container">
    <div class="col-10 mx-auto p-4 border mb-5">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Product</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
   @foreach($orders as $order)
   <tr>
       <td>{{$order->id}}</td>
       <td>{{$order->product_name}}</td>
       <td>{{$order->price}}$</td>
       <td>{{$order->quantity}}</td>
       <td>
        <form action="{{route('deleteorder',$order->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button class="btn" type="submit">Delete</button>
        </form>
    </td>
   </tr>
   @endforeach
</tbody>
</table>
    <br><br><br>
   <form action="{{route('home')}}">
        <button class="back" type='submit'>Back</button>
    </form>
</body>
</html>
