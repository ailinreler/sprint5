<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Category;
use App\Tag;

class ProductController extends Controller
{

  public function create()
  {

    $categories = Category::all();
    $tags = Tag::all();

    return view('create', compact('categories', 'tags'));
  }

  public function index()
  {
    $products = Product::all();
    $categories = Category::all();
    $tags = Tag::all();

    return view('products', compact('products', 'categories', 'tags'));
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

    $category = Category::find($request->input('category_id'));


    $product = Product::create([
      'name' => request('name'),
      'precio' => request('precio'),
    ]);

    $product->category()->associate($category);

    if (isset($imagen)) {
      $product->imagen = $imagen;
    }

    $product->tags()->sync([$request->input('tag')]);

    $product->save();

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

    if ($request->imagen !== null) {

      $extensionImagen = $request->file('imagen')->getClientOriginalExtension();

      $imagen = $request->file('imagen')->storeAs('imagenProducto', uniqid() . "." . $extensionImagen, 'public');

      $product->imagen = $imagen;
    }

    $product->save();

    return redirect()->home();

  }

  public function filter(Request $request)
  {
    $tags = Tag::all();

    $products = Product::where('category_id', $request->input('categoria-seleccion'));

    $idTag = $request->input('tag');

    if($request->input('tag') !== null){
      $products = $products->whereHas('tags', function($query) use ($idTag){
        $query->where('id', '=', $idTag);
      });
    }

    $products = $products->get();

    $categories = Category::all();

    return view('filterPage', compact('products', 'categories', 'tags'));

  }

}
