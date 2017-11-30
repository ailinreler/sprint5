<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class categoryController extends Controller
{
    public function index()
    {
      return view('categorias');
    }

    public function store(Request $request)
    {
      $category = Category::create(request(['name']));

      return redirect('/nuevaCategoria');
    }
}
