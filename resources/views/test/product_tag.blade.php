<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($products as $product)
      {{$product->name}}
      <ul>

      @foreach ($product->tags as $tag)
        <li>
          {{$tag->name}}
        </li>
      @endforeach
    </ul>
    @endforeach
  </body>
</html>
