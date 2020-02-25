@extends('layouts.app')
@section('content')
  
  <div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
      @if (session()->has('message'))
      <div class="alert alert-success">
          {{session('message')}}
      </div>
      @endif
    </div>
   </div>                         
    

      
      <div class="row">
        <div class="col-md-12">
       
        </div>
      </div>
  </div>
</div>
<!-- model area -->


    <!-- New Arrivals Area -->
    <section class="new_arrivals_area section_padding_100 clearfix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_heading new_arrivals">
                        <h5>New Arrivals</h5>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-sm">
                
            @foreach($products->chunk(3) as $productChunk)
                    <div class="new_arrivals_slides owl-carousel">
                    
            @foreach($productChunk as $product)
              
                        <!-- Single Product -->
                        <div class="single-product-area">
                            <div class="product_image">
                                <!-- Product Image -->
                                <img class="normal_img" src="{{ asset('images/'.$product->product_image)}}" alt="">
                               

                                <!-- Product Badge -->
                                <div class="product_badge">
                                    <span>New</span>
                                </div>

                                <!-- Wishlist -->
                            
                            </div>

                            <!-- Product Description -->
                            <div class="product_description">
                                <!-- Add to cart -->
                                <div class="product_add_to_cart">
                <a type="button" href="{{route('products.addToCart',$product)}}" class="btn btn-sm btn-outline-secondary">
                                    <i class="icofont-shopping-cart"></i>Add to Cart</a>
                                </div>

                                <!-- Quick View -->
                                <div class="product_quick_view">
                                    <a href="{{route('singlepage', $product->id)}}"><i class="icofont-eye-alt"></i> Quick View</a>
                                </div>

                                <p class="brand_name">{{$product->title}}</p>
                               
                                <h6 class="product-price">Rs:{{$product->user_price}}</h6>
                            </div>
                        </div>

                    
              @endforeach  
                </div>
             @endforeach

             </div>
            </div>
           
        </div>
    </section>
 @endsection




