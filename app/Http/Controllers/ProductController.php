<?php

namespace App\Http\Controllers;


use App\Category;
use App\Http\Requests\ProductStore;
use App\Product;
use Carbon\Traits\make;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\validate;

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
            'product_image' => 'required',
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
            return back()->with('message','product successfuly added');
        } else {
            return back()->with('message','error product no added');
        }
        
    }   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
                return back()->with('message', 'product updated successfuly');

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
}
