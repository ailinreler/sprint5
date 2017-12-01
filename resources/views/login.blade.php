@extends('layouts.master')

@section('content')

  <div class="container-login">


    @if ($errors->has('name'))
      <div class="errores">
        <p class="help-block"><strong>Alguno de los datos no es correcto</strong>
        </p>
      </div>
    @endif

    <div class="divErrores">

    </div>


    <div class="loginbox">
      <img class="user" src="images/user-login.png" alt="" >
      <form id="loginform" class="loginbox-form" action="/login" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="inputbox">
          <input class="username" type="text" name="name" value="" placeholder="Usuario">
          <span><i class="fa fa-user" aria-hidden="true"></i></span>
        </div>
        <div class="inputbox">
          <input class="password" type="password" name="password" value="" placeholder="Contraseña">
          <span><i class="fa fa-lock" aria-hidden="true"></i></span>
        </div>
        <input class="submit" type="submit" name="" value="Ingresar">

        <label for="recodar">Recordarme:</label>
        <input type="checkbox" name="recordar" value="recordar" class="recordar">
      </form>
      <a href="/register">¿No tiene una cuenta? Registrate.</a>
      <br>
      <a href="#">¿Olvidó su contraseña?</a>


    </div>

  </div>

  <script type="text/javascript" src="\js\scrypt.js"></script>

@endsection
