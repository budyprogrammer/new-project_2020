<?php

namespace App;

use App\Category;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $guarded = [];
	// protected $fillable = ['category_id'];
    // public function categories()
   	// {
   	// 	return $this->belongsTo(Category::class);
   	// }	

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    
   	 public function categories()
    {
    	return $this->belongsToMany("App\Category");		
    }
}
