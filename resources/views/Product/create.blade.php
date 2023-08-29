<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/../css/signup.css" >
    <title>Document</title>
</head>
<body>
    <form action="{{route('store')}}" method="post" >
     @csrf

    <fieldset>
      <label for="name">Product Name:</label>
      <input type="text" id="name" name="product_name" ">

      @error('product_name')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror

      <label for="price">Product Price:</label>
      <input type="text" id="price" name="product_price">

      @error('product_price')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror

      <label for="av">Availability:</label>
      <input type="text" id="av" name="product_availability" >

      @error('product_availability')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror

     <label for="cat">Category ID:</label>
     <input type="text" id="cat" name="category_id" >

      @error('category_id')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror

    </fieldset>



    <input type="submit" class="btn" value="Add Product">
  </form>
</body>
</html>
