@extends('layouts.master')

@section('content')
  <div class="page-select">
    <label>Elegir producto</label>
    <div class="product-select">
      <form class="formulario" action="/filtro" method="post">

        {{ csrf_field() }}

        <select name="categoria-seleccion" class="categoria-seleccion">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>

        <input type="submit" name="filtro" value="filtrar">

      </form>
    </div>
    <br>

    <label>Elegir Tag</label>
  <div class="product-select">
    <select name="tag">
      @foreach ($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
      @endforeach
    </select>
  </div>
  </div>
  <!--=================PRODUCTOS DE LA PAGINA==============================-->
  <div class="page-product">


    @foreach ($products as $product)
      <div class="product-div">
          <img src="/storage/{{$product->imagen}}" alt="" width="200px">
          <p>{{$product->name}}</p>
          <p><del class="tachado">{{$product->precio + $product->precio * 0.5}}</del> ${{$product->precio}}</p>
          <input type="button" name="" value="Ver producto">
      </div>
    @endforeach

  </div>


@endsection
