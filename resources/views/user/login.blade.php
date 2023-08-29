<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="/../css/login.css" >
</head>
<div class="login-page">
    <div class="form">
      <form class="login-form" action="{{route('check')}}" method="post" >
       @csrf
        <input class="input" type="text" placeholder="email" name="name"/>

        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror

        <input class="input" type="password" placeholder="password" name="password"/>

        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
       @enderror

       <input type="submit" value="Login" class="btn">
        <p class="message">Not registered? <a href="{{ route('signup') }}">Create an account</a></p>
      </form>
    </div>
  </div>
</html>
