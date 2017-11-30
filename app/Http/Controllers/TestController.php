<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function products()
  {
    $products = \App\Product::all();

    $parametros = [
      "products" => $products,
    ];

    return view('test.product_tag', $parametros);
  }
}
