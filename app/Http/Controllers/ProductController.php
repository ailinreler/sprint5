<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Category;

class ProductController extends Controller
{

  public function create()
  {

    $categories = Category::all();

    return view('create', compact('categories'));
  }

  public function index()
  {
    $products = Product::all();
    $categories = Category::all();

    return view('products', compact('products', 'categories'));
  }

  public function goToEdit()
  {

    if (count(Product::all()) < 1) {
      return view('index');
    }

    $products = Product::all();
    $categories = Category::all();
    return view('edit', compact('products','categories'));
  }

  public function store(Request $request)
  {
    if ($request->imagen !== null) {

      $extensionImagen = $request->file('imagen')->getClientOriginalExtension();

      $imagen = $request->file('imagen')->storeAs('imagenProducto', uniqid() . "." . $extensionImagen, 'public');
    }


    $product = Product::create(request(['name', 'precio', 'category_id']));

    if (isset($imagen)) {
      $product->imagen = $imagen;

      $product->save();
    }

    return redirect('/products');


  }

  public function delete()
  {
    $products = Product::all();

    return view('delete', compact('products'));
  }

  public function destroy(Request $request)
  {

    $producto = Product::find($request->eliminar);
    $producto->delete();

    return redirect('/');
  }

  public function update(Request $request, $producto)
  {
    $product = Product::find($producto);

    if ($request->has('name') && $request->name !== null) {

      $product->name = $request->name;

    }

    if ($request->has('precio') && $request !== null) {
      $product->precio = $request->precio;
    }

    if ($request->has('category') && $request !== null) {
      $product->category_id = $request->category;
    }

    $product->save();

  }

}
