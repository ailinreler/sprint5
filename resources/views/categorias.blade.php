@extends('layouts.master')

@section('content')
  <div class="loginbox">
    <form class="" action="/addCategory" method="post">
      {{ csrf_field() }}

      <label for="category">Nueva Categoria:</label>
      <input type="text" name="name" value="">

      <input type="submit" name="enviar" value="Guardar">
    </form>
  </div>
@endsection
