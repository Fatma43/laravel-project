<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/show.css')}}">
    <title>Document</title>
</head>
<body>
    <img src="{{$product->category->category_pic}}" alt="img">

    <p>{{$product->product_name}}</p>
    <p>{{$product->product_price}}$</p>
    <p>{{$product->product_availability}}</p><br>
    <br><br><br>
   <form action="{{route('home')}}">
        <button class="back" type='submit'>Back</button>
    </form>
</body>
</html>
