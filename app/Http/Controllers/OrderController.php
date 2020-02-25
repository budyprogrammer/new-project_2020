<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Customer;
use App\Order;
use DB;
use Illuminate\Http\Request;

use Session;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(!Session::has('cart') || empty(Session::get('cart')->getContents())){
            return redirect('products')->with('message','no product in the cart');
          }
          $cart = Session::get('cart');
          return view('products.checkout', compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        $cart = [];
        $order = '';
        $checkout = [];
        if(Session::has('cart')){
            $cart = Session::get('cart');
        }
            
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'number' => 'required|numeric',
            'address' => 'required',
            
        ]);
   
          $customer = [
                    "name" => $request->name,
                    "email" => $request->email,
                    "number" => $request->number,
                    "address" => $request->address,
         ];
                  
        DB::beginTransaction();
          
           $checkout = Customer::create($customer);
                foreach ($cart->getContents() as $title => $product) {
                    $products = [
                        'customer_id' => $checkout->id,
                        'user_id' => $checkout->id,
                        'product_id' => $product['product']->id,
                        'qty' => $product['qty'],
                        'user_price' => $product['user_price'],
                        
                    ];
                    $order = Order::create($products);
                }
            
                if ($checkout && $order) {
                    DB::commit();
                    Session::forget('cart');
                    return redirect('products')->with('message', 'Your Order Successfully Processed');
                } else {
                    DB::rollback();
                    return response()->json($order);
                    return redirect('checkout')->with('message', 'Invalid Activity!');
                }
        
        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
