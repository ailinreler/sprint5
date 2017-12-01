@extends('layouts.master')

@section('content')
  <div class="container-login">

    @if (count($errors) > 0)
      <div class="errores">
        @foreach ($errors->all() as $error)
          <p>{{$error}}</p>
        @endforeach
      </div>
    @endif

    <div class="divErrores">

    </div>


    <div class="loginbox">
      <img class="user" src="images/user-login.png" alt="" >
      <form id="register-form" class="loginbox-form" action="/register" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="inputbox">
          <input class="username" type="text" name="name" value="" placeholder="Usuario">
          <span><i class="fa fa-user" aria-hidden="true"></i></span>

        </div>
        <div class="inputbox">
          <input class="password" type="password" name="password" value="" placeholder="Contraseña">
          <span><i class="fa fa-lock" aria-hidden="true"></i></span>

        </div>
        <div class="inputbox">
          <input class="password_confirmation" type="password" name="password_confirmation" value="" placeholder="Corroborar Contraseña">
          <span><i class="fa fa-lock" aria-hidden="true"></i></span>

        </div>
        <div class="inputbox">
          <input class="email" type="email" name="email" value="" placeholder="Correo electrónico">
          <span><i class="fa fa-envelope" aria-hidden="true"></i></span>

        </div>
        <div class="inputbox">
          <input class="phone" type="number" name="phone" value="" placeholder="Número de teléfono / Celular">
          <span><i class="fa fa-mobile" aria-hidden="true"></i></span>

        </div>

        <div class="inputbox">
          <label for="avatar">Avatar:</label>
          <input type="file" id="avatar" name="avatar">
        </div>

          <input href="login.html" class="submit" type="submit" name="" value="Registrarte">
        </form>
      </div>

    </div>

    <script type="text/javascript" src="\js\scrypt.js">

    </script>
@endsection
