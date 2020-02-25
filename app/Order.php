<?php

namespace App;

use App\Customer;
use App\Product;
use App\User;
use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
	protected $guarded = [];
 
 	 public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
    
    public function customers()
    {
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function products()
    {
    	return $this->belongsTo(Product::class,'product_id');
    }
}
