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
    <label>Elegir marca</label>
    <div class="product-select">
    <select>
      <option value="Marca1">Apple</option>
      <option value="Marca2">Samsung</option>
      <option value="Marca3">Motorola</option>
      <option value="Marca4">Huawei</option>
      <option value="Marca5">Sony</option>
      <option value="Marca6">LG</option>
    </select>
    </div>
    <br>
    <label>Elegir precio</label>
  <div class="product-select">
    <select>
      <option value="Descuento1">10%</option>
      <option value="Descuento2">20%</option>
      <option value="Descuento3">30%</option>
      <option value="Descuento4">40%</option>
      <option value="Descuento5">50%</option>
      <option value="Descuento6">Other</option>
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
