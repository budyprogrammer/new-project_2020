@extends('layouts.app')
@section('content')
<div class="checkout_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-6">
           
          
                    
                        <h5 class="mb-4">Billing Details</h5>

                         <form action="{{route('checkout.store')}}" method="post" id="payment-form">
            @csrf
                            <div class="row">
                                <div class="col-md-8 mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" name="name" id="first_name" placeholder="Name" value="" required="">
                                </div>
                             <div class="col-md-8 mb-3">
                                    <label for="email_address">Email Address</label>
                                    <input type="email" class="form-control" id="email_address" placeholder="Email Address"  name="email" >
                                </div>
                               
                                
                                <div class="col-md-8 mb-3">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="number" name="number" class="form-control" placeholder="Number" id="phone_number" min="0" value="" >
                                </div>
                             
                                <div class="col-md-8 mb-3">
                                    <label for="street_address">Address</label>
                                    <input type="text" class="form-control" name="address" id="street_address" placeholder="Address" value="">
                                </div>
                                 <div class="col-md-8 mb-3">
                                     <button type="submit" class="btn btn-primary">Checkout</button>
                                   
                                </div>
                               
                            </div>

                        
                            
                        </form>
                
                  
                </div>
                   <div class="col-6">
                       <h5 class="mb-3">Cart Details</h5>
            <div class="table-responsive">
                <table class="table mb-3 text-center">
                    <tbody>
                      
                      <tr>
                            <td>Total Quantity</td>
                            <td>{{$cart->getTotalQty()}}</td>
                            
                        </tr>
                        <tr>
                            <td>Product Name</td>
                            <td>Product Price </td>
                            <td>Product quantity</td>
                            <td>Product Image</td>
                        </tr>
                         @foreach($cart->getContents() as $title => $product)
                        <tr>
                            <td>{{$product['product']->title}}</td>
                            <td>Rs:{{$product['user_price']}}</td>
                            <td>{{$product['qty']}}</td>
                            <td><img width="60" src="{{ asset('images/'.$product['product']->product_image)}}"></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
                   </div> 
            </div>
        </div>
    </div> 
@endsection
