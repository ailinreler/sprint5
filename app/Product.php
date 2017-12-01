<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['name', 'precio', 'imagen', 'category_id'];

    public function category()
    {
      return $this->belongsTo('App\Category', 'category_id', 'id');
    }

    public function tags()
    {
      return $this->belongsToMany('App\Tag', 'product_tag', 'product_id', 'tag_id');

    }

    public function categoryFilter($id)
    {
      $products = Product::all()->where('category_id' , $id);
      return $products;
    }


}
