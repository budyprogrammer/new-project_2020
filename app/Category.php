<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Product;
class Category extends Model
{
	protected $guarded = [];

   	
   	// public function products()
   	// {
   	// 	return $this->hasOne(Product::class);
   	// }
	  public function products()
    {
    	return $this->blongsToMany('App\Product');
    }
      public function childrens(){
        return $this->belongsToMany(Category::class,'category_parent','parent_id','category_id');
    }
}
