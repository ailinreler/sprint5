@extends('layouts.master')

@section('content')
  <div class="loginbox">
    <form class="delete" action="/destroy" method="post">

      {{ csrf_field() }}
      {{ method_field('DELETE') }}

      <select class="" name="eliminar">
        @foreach ($products as $product)
          <option value="{{$product->id}}"> {{$product->name}}</option>
        @endforeach
      </select>

      <input type="submit" name="" value="eliminar">

    </form>
  </div>
@endsection
