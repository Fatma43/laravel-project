<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="/../css/signup.css" >
</head>
<body>

  <form action="{{route('sign')}}" method="POST">
    @csrf
    <h1>Sign Up</h1>

    <fieldset>
      <legend>Your basic info</legend>

      <label for="name">Username:</label>
      <input type="text" id="name" name="name">

      @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror

      <label for="mail">Email:</label>
      <input type="email" id="mail" name="email">

      @error('email')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror

      <label for="password">Password:</label>
      <input type="password" id="password" name="password">

      @error('password')
      <div class="alert alert-danger">{{ $message }}</div>
     @enderror

      <label>Gender:</label>
      <input type="radio" id="male" value="male" name="gender"><label for="male" class="light">Male</label><br>
      <input type="radio" id="female" value="female" name="gender"><label for="female" class="light">Female</label>


    </fieldset>



    <input type="submit" class="btn" value="sign up">
  </form>

</body>
</html>
