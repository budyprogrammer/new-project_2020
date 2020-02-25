@extends('layouts.app')
@section('content')
 <section class="welcome_area">
     
        <div class="welcome_slides owl-carousel">
            <!-- Single Slide -->
            <div class="single_slide bg-img" style="background-image: url('frontend/bg-img/8.jpg')">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-7 col-md-8">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInUp" style="color: white;" data-delay="0">Special Offer</p>
                                <h2 data-animation="fadeInUp" style="color: white;" data-delay="300ms">40% Off Today</h2>
                                <h4 data-animation="fadeInUp" style="color: white;" data-delay="600ms">Only $78</h4>
                                
                            </div>
                        </div>
                        <div class="col-5 col-md-4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single_slide bg-img" style="background-image: url('frontend/bg-img/7.jpg')">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-8">
                            <div class="welcome_slide_text">
                                <p data-animation="fadeInUp" style="color: white;" data-delay="0">Sustainable Clock</p>
                                <h2 data-animation="fadeInUp" style="color: white;" data-delay="300ms">Smart Watch</h2>
                                <h4 data-animation="fadeInUp" style="color: white;" data-delay="600ms">Only $31 <span class="regular-price">$43</span></h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single_slide bg-img" style="background-image: url('frontend/bg-img/6.jpg')">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-6">
                            <div class="welcome_slide_text">
                                <p class="text-white" style="color: white;" data-animation="fadeInUp" data-delay="0">100% Cotton</p>
                                <h2 class="text-white" style="color: white;" data-animation="fadeInUp" data-delay="300ms">Hot Shoes</h2>
                                <h4 class="text-white" style="color: white;" data-animation="fadeInUp" data-delay="600ms">Now $19</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Welcome Slides Area -->

    <!-- Top Catagory Area -->
    <div class="top_catagory_area mt-50 clearfix">
        <div class="container">
            <div class="row">
                <div>
                    <div class="section_heading new_arrivals">
                        <h5>Product Categories</h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Redragon Products">
                        <a href="#">
                            <img src="{{asset('frontend/categories/redragon.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Android TV Box">
                        <a href="#">
                            <img src="{{asset('frontend/categories/androidtv.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Attendance Machines">
                        <a href="#">
                            <img src="{{asset('frontend/categories/attandancemachine.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Bluetooth Speakers">
                        <a href="#">
                            <img src="{{asset('frontend/categories/speaker.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Bluetooth Handsfrees">
                        <a href="#">
                            <img src="{{asset('frontend/categories/bluetoothhandfree.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Bluetooth Handphones">
                        <a href="#">
                            <img src="{{asset('frontend/categories/bluetoothheadphone.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Security Cameras">
                        <a href="#">
                            <img src="{{asset('frontend/categories/securitycameras.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Barcode Scanners">
                        <a href="#">
                            <img src="{{asset('frontend/categories/barcodescanner.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Music Receiver">
                        <a href="#">
                            <img src="{{asset('frontend/categories/bluetooth_music_receiver.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Cables">
                        <a href="#">
                            <img src="{{asset('frontend/categories/cable.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Converters">
                        <a href="#">
                            <img src="{{asset('frontend/categories/converters.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Connectors">
                        <a href="#">
                            <img src="{{asset('frontend/categories/connecter.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="HDMI Cables">
                        <a href="#">
                            <img src="{{asset('frontend/categories/hdmi_cable.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Flash Drives">
                        <a href="#">
                            <img src="{{asset('frontend/categories/flashdrive.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="HDMI Wifi Dongles">
                        <a href="#">
                            <img src="{{asset('frontend/categories/hdmi_wifi_dongle.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Laptops">
                        <a href="#">
                            <img src="{{asset('frontend/categories/laptops.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="HDD Cases">
                        <a href="#">
                            <img src="{{asset('frontend/categories/hdd.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Laptops Chargers">
                        <a href="#">
                            <img src="{{asset('frontend/categories/laptop_charger.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Mouse pads">
                        <a href="#">
                            <img src="{{asset('frontend/categories/mousepad.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Laptops Bags">
                        <a href="#">
                            <img src="{{asset('frontend/categories/laptop_bags.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Mobile Accessories">
                        <a href="#">
                            <img src="{{asset('frontend/categories/mobile_accessories.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Projectors and Screens">
                        <a href="#">
                            <img src="{{asset('frontend/categories/projectors.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Networking">
                        <a href="#">
                            <img src="{{asset('frontend/categories/networking.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Power Banks">
                        <a href="#">
                            <img src="{{asset('frontend/categories/powerbanks.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Stereo Hansfree">
                        <a href="#">
                            <img src="{{asset('frontend/categories/stereohandfree.jpg')}}" alt="">
                        </a>
                    </div>
                </div>


                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Smart Watches">
                        <a href="#">
                            <img src="{{asset('frontend/categories/smartwatches.jpg')}}" alt="">
                        </a>
                    </div>
                </div>

                <!-- Single Catagory -->
                <div class="col-12 col-md-4">
                    <div class="single_catagory_area mt-50" data-toggle="tooltip" data-placement="top" title="Splitters and Switches">
                        <a href="#">
                            <img src="{{asset('frontend/categories/splitters.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top Catagory Area -->

    <!-- Quick View Modal Area -->
   
    <!-- Quick View Modal Area -->

    <!-- New Arrivals Area -->
   
    <!-- New Arrivals Area -->

    <!-- Best Rated/Onsale/Top Sale Product Area -->
  
    <!-- Best Rated/Onsale/Top Sale Product Area -->

    <!-- Popular Brands Area -->
    <section class="popular_brands_area section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="popular_section_heading mb-50">
                        <h5>Our Product Brands</h5>
                    </div>
                </div>
                <div class="col-12">
                    <div class="popular_brands_slide owl-carousel">
                        <div class="single_brands">
                            <img src="img/partner-img/1.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/2.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/3.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/4.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/5.jpg" alt="">
                        </div>
                        <div class="single_brands">
                            <img src="img/partner-img/6.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Brands Area -->

    <!-- Special Featured Area -->
    <section class="special_feature_area pt-5">
        <div class="container">
            <div class="row">
                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-ship"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Free Shipping</h6>
                            <p>For orders above $100</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-box"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Happy Returns</h6>
                            <p>7 Days free Returns</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-money"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>100% Money Back</h6>
                            <p>If product is damaged</p>
                        </div>
                    </div>
                </div>

                <!-- Single Feature Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single_feature_area mb-5 d-flex align-items-center">
                        <div class="feature_icon">
                            <i class="icofont-live-support"></i>
                            <span><i class="icofont-check-alt"></i></span>
                        </div>
                        <div class="feature_content">
                            <h6>Dedicated Support</h6>
                            <p>We provide support 24/7</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection