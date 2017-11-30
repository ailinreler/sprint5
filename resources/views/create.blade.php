@extends('layouts.master')

@section('content')

  <div class="loginbox">
    <form class="create" action="/newProduct" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <label for="name">Nombre:</label>
      <input id="name" type="text" name="name" value="">

      <label for="precio">Precio:</label>
      <input id="precio" type="number" name="precio" value="">

      <label for="imagen">Imagen:</label>
      <input id="imagen" type="file" name="imagen" value="">

      <label for="category_id"></label>
      <select id="category_id" class="" name="category_id">

        <option value="">Elegir categoria</option>

        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>

      <input type="submit" name="submit" value="Guardar">

    </form>
  </div>

@endsection
