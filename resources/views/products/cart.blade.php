@extends('layouts.app')
@section('content')
@if(isset($cart) && $cart->getContents())
  <div class="cart_area section_padding_100_70 clearfix">
        <div class="container">
             <div class="col-sm-12">
      @if (session()->has('message'))
      <div class="alert alert-success">
          {{session('message')}}
      </div>
      @endif
    </div>
            <div class="row justify-content-between">
                <div class="col-12">
                    <div class="cart-table">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-30">
  
                <thead>

                    <tr class="text-center">
                        <th scope="col">Product Image</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total Price</th>
                        <th>Delete Product</th>
                      
                    </tr>
                       
                </thead>

                <tbody>
                   
                    @foreach($cart->getContents() as $title => $product)
                    <tr class="text-center">
                       
                        <td>
                            <img src="{{ asset('images/'.$product['product']->product_image)}}">
                        </td>
                        <td>
                            <a href="#">{{$product['product']->title}}</a>
                        </td>
                        <td>Rs:{{$product['product']->user_price}}</td>
                        <td>
                            <div class="quantity">
                                <form method="POST" action="{{route('cart.update', $product)}}" >
                            @csrf
                                <input type="number" class="qty-text" id="qty2" step="1" min="1" max="99" name="qty" value="{{$product['qty']}}">
                                <input type="submit" name="update" value="Update" class="btn btn-block btn-success btn-round mt-2">
                        </form>
                            </div>
                        </td>
                        <td>Rs:{{$product['user_price']}}
                        </td>
                        <td class="text-center">
                                <form action="{{route('cart.remove', $product)}}" method="POST" accept-charset="utf-8">
                            @csrf

                            <input type="submit" name="remove" value="x Remove" class="btn btn-danger"/>
                            </form>
                        </td>
                    </tr>
                @endforeach
              
              
                </tbody>
            </table>
        </div>	
        <div class="cart-total-area mb-30">
            <h5 class="mb-3">Cart Totals</h5>
            <div class="table-responsive">
                <table class="table mb-3">
                    <tbody>
                      
                      
                      <tr>
                            <td>Total Quantity</td>
                            <td>{{$cart->getTotalQty()}}</td>
                           
                        </tr>
                        <tr>
                            <td>Total Price</td>
                            <td>Rs:{{$cart->getTotalPrice()}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>
                        
        </div>	
        <!-- <div class="row"> -->
                
            
            <!-- <div class="col-md-2"> -->
            <a href="{{url('/register')}}" class="btn btn-primary">Proceed To Checkout</a>
                
            <!-- </div> -->
             <!-- <div class="col-md-2"> -->
                <a href="{{url('/checkout')}}" class="btn btn-primary right-left">Chekout as a Guest </a>
                           <!--         
               </div> 
               </div>     -->
</div>
</div>
</div>
</div>
</div>

    @else
        <p class="alert alert-danger">No Products in the Cart <a href="{{route('products')}}">Buy Some Products</a></p>
    @endif
        

@endsection
