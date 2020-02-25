@extends('layouts.app')
@section('content')
  
  <section class="single_product_details_area section_padding_100">
        <div class="container">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                  @if (session()->has('message'))
                  <div class="alert alert-success">
                      {{session('message')}}
                  </div>
                  @endif
            </div>
 
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="single_product_thumb">
                        <div id="product_details_slider" class="carousel slide" data-ride="carousel">

                            <!-- Carousel Inner -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                        <img height="600" class="gallery_img d-block w-100" src="{{asset('images/'.$products->product_image)}}" align="$products->title">
                                    </a>
                                    <!-- Product Badge -->
                                    <div class="product_badge">
                                        <span class="badge-new">New</span>
                                    </div>
                                </div>
                                
                            </div>

                            <!-- Carosel Indicators -->
                            
                        </div>
                    </div>
                </div>

                <!-- Single Product Description -->
                <div class="col-12 col-lg-6">
                    <div class="single_product_desc">
                         <h4 class="title mb-2">{{$products->title}}</h4>
                        <h4 class="price mb-4">Rs:{{$products->user_price}}</h4>

                        <!-- Overview -->
                        <div class="short_overview mb-4">
                            <h6>Overview</h6>
                            <p>{{$products->description}}</p>
                        </div>

                        <!-- Color Option -->
                     

                        <!-- Size Option -->
                      

                        <!-- Add to Cart Form -->
                        <form class="cart clearfix my-5 d-flex flex-wrap align-items-center" method="post">
                           
                            <a href="{{route('products.addToCart',$products)}}" name="addtocart" class="btn btn-primary mt-1 mt-md-0 ml-1 ml-md-3">Add to cart</a>
                        </form>

                        <!-- Others Info -->
                    
                        <!-- Size Guide -->
                 
                    </div>
                </div>
            </div>
        </div>

     
    </section>



@endsection



