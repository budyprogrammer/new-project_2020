<?php

namespace App\Http\Controllers;


use App\Cart;
use App\Category;
use App\Customer;
use App\Http\Requests\ProductStore;
use App\Mail\ContactFormMail;
use App\Order;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\validate;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $products = Product::all();
        // return $products;
       return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'admin_price' => 'required|numeric',
            'user_price' => 'required|numeric',
            'category_id' => 'required',
            'product_image' => 'required|mimes:jpeg,png',
        ]);
   
         $image = $request->file('product_image');
         $filename = $image->getClientOriginalName();
         $image->move(public_path('images/'),$filename);
        $product = Product::create([
            'title' => $request->title,
            'description' => $request->description,
            'product_image' => $filename,
            'admin_price' => $request->admin_price,
            'user_price' => $request->user_price,
            'product_image' => $filename,   
        ]);
        // dd($product);   
        if ($product) {
             $product->categories()->attach($request->category_id);
            return redirect('admin/product')->with('message','product successfuly added');
        } else {
            return back()->with('message','error product no added');
        }
        
    }   

    /**
         * Display the specified resource.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Responses
         */
    public function show()
    {
      
       $products = Product::all();
       $categories = Category::all();
       
       return view('products.all', compact('categories','products'));
    }

    public function sing_page($id)
    {   
        
        $products = Product::find($id);
        // dd($products);
        return view('products.singlepage',compact('products'));
    }    


    public function showProduct()
    {
        // return 'a';
      if(request()->category){
            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('title',request()->category);
            })->get();

            $categories = Category::all();
        }else{

            $categories = Category::all();
            $products = Product::all();

        }
        return view('products.products',compact('products','categories'));
        
        
    }  
   
    public function AddToCart(Product $product, Request $request)
   {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $qty = $request->qty ? $request->qty : 1;
        $cart = new Cart($oldCart);
        $cart->addProduct($product, $qty);
        Session::put('cart', $cart);
        return back()->with('message', "Product $product->title has been successfully added to Cart");
   }

    public function removeProduct(Product $product){
          $oldCart = Session::has('cart') ? Session::get('cart') : null;
          $cart = new Cart($oldCart);
          $cart->removeProduct($product);
          Session::put('cart', $cart);
          return back()->with('message', "Product $product->title has been successfully removed From the Cart");
       }


    public function updateProduct(Product $product, Request $request){
  
      $oldCart = Session::has('cart') ? Session::get('cart') : null;
      $cart = new Cart($oldCart);
      $cart->updateProduct($product, $request->qty );
      Session::put('cart', $cart);
      return back()->with('message', "Product $product->title has been successfully Updated in the Cart");
    }


    public function cart(){

      if(!Session::has('cart')){
        return view('products.cart');
      }
      $cart = Session::get('cart');
      return view('products.cart', compact('cart'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
 * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::with('childrens')->get();
        $product = Product::find($id);
        return view('admin.products.create',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'title'=>'required',
            'description'=>'required',
            'admin_price' => 'required|numeric',
            'user_price' => 'required|numeric',
            'category_id' => 'required',
            'product_image' => 'required|mimes:jpeg,png',
        ]);
        $product = Product::find($id);
        $image = $request->file('product_image');
        $filename = $image->getClientOriginalName();
        $image->move(public_path('images/'),$filename);
        $product->product_image = $filename;
        $product->title = $request->title;
        $product->description =$request->description;
        $product->admin_price = $request->admin_price;
        $product->user_price = $request->user_price;
       

        $product->categories()->detach();
             
        if($product->update()){
             $product->categories()->attach($request->category_id);
                return redirect('admin/product')->with('message', 'product updated successfuly');

             }else
                return back()->with('message','error is throw product updated');
    }

    /**
     * Remove the specified resource from storage.
     *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
    public function destroy($id)
    {
       $product = Product::find($id);
        if ($product->forceDelete()){
            Storage::delete($product->image);
            return back()->with('message','product deleted Successfully!');
                
        }else{
            return back()->with('message','Error deleting Record');
        }
    }

    public function viewOrders()
    {
        $orders = Order::with('customers','products','users')->get();
        
       return view('admin.orders.orders', compact('orders'));
    }

    public function orderDelete($id)
    {
       $orders = Order::find($id);
       $orders->delete();
            return back()->with('message','orders deleted Successfully!');
                
      
    }
    public function order_view($id)
    {
        $orders = Order::find($id);
      
        return view('admin.orders.orderview',compact('orders'));
    }

    public function contact()
    {
        return view('products.contact');   
    }

    public function SendContact(Request $request)
    {
        return "error";
        // dd($request->all());
        $data = $request->validate([
            'nmae'   => 'required',
            'email'  => 'required|email',
            'number' => 'required|numeric',
            'message' => 'required'
        ]);

            $data = $request([
                'name' => $request->name,
                'email' => $request->email,
                'number' => $request->number,
                'message' => $request->message
            ]);
            // $data =$request->message;

            // return $message;
            // dd($datas);
            if ($data) {
                # code...
            Mail::send(new  ContactFormMail($message));
          return view('products.contact')->with('success','excel data imported successfully.');
            }else{
                return "error";
            }

        }
}
