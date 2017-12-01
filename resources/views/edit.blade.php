@extends('layouts.master')

@section('content')

<div class="loginbox">
  <form class="esteFormulario" action="/editProduct/{{$products[0]->id}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <select class="producto" name="">
      @foreach ($products as $product)
        <option value="{{$product->id}}">{{$product->name}} - ${{$product->precio}}</option>
      @endforeach
    </select>

      <div class="">
        <label for="name">Nombre:</label>
        <input id="name" type="text" name="name" value="">
      </div>

      <div class="">
        <label for="precio">Precio:</label>
        <input type="number" name="precio" value="">
      </div>

      <select class="" name="category">
        @foreach ($categories as $category)
          <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>

      <div class="">
        <input type="file" name="imagen" value="">
      </div>

      <input type="submit" name="" value="modificar">


  </form>
</div>


<script type="text/javascript">
function cambiarAction() {
  var formulario = document.querySelector('.esteFormulario'); //agarras el formulario
  var selectInput = document.querySelector('.producto');

  formulario.setAttribute('action', '/editProduct/' + selectInput.value);
}

document.querySelector('.producto').addEventListener('change', cambiarAction);
</script>
@endsection
