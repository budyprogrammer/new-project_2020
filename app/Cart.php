<?php
namespace App;

class Cart
{
	private $contents;
    public $totalQty;
    private $totalPrice;

    public function __construct($oldCart){
    	if($oldCart){
    		$this->contents = $oldCart->contents;
    		$this->totalQty = $oldCart->totalQty;
    		$this->totalPrice = $oldCart->totalPrice;
    	}
    }

    public function addProduct($product, $qty){
    	$products = ['qty' => 0, 'user_price' => $product->user_price, 'product' => $product];
    	if($this->contents){
    		if(array_key_exists($product->title, $this->contents)){
    			$products = $this->contents[$product->title];
    		}
    	}

    	$products['qty']+=$qty;
    	$products['user_price'] = $product->user_price * $products['qty'];
    	$this->contents[$product->title] = $products;
    	$this->totalQty+=$qty;
    	$this->totalPrice += $product->user_price;

    }

     public function removeProduct($product){
        if($this->contents){
            if(array_key_exists($product->title, $this->contents)){
                $rProduct = $this->contents[$product->title];
                $this->totalQty -= $rProduct['qty'];
                $this->totalPrice -= $rProduct['user_price'];
                array_forget($this->contents, $product->title);
            }
        }
    }

    public function updateProduct($product, $qty){
        if($this->contents){
            if(array_key_exists($product->title, $this->contents)){
                $products = $this->contents[$product->title];
            }
        }

        $this->totalQty -= $products['qty'];
        $this->totalPrice -= $products['user_price'];
        $products['qty'] = $qty;
        $products['user_price'] = $product->user_price * $qty;
        $this->totalPrice += $products['user_price'];
        $this->totalQty += $qty;
        $this->contents[$product->title] = $products;
    }




    public function getContents(){
        return $this->contents;
    }
    public function getTotalQty(){
        return $this->totalQty;
    }
    public function getTotalPrice(){
        return $this->totalPrice;
    }
}