@extends('layouts.app')
@section('content')
  <div class="message_now_area section_padding_100" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="popular_section_heading mb-50 text-center">
                        <h5 class="mb-3">Stay Conneted with us</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="single-contact-info mb-30">
                        <i class="icofont-phone"></i>
                        <p>+00 88 1125263 <br> +00 88 1125264</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="single-contact-info mb-30">
                        <i class="icofont-ui-email"></i>
                        <p>support@example.com <br> help@example.com</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="single-contact-info mb-30">
                        <i class="icofont-fax"></i>
                        <p>+00 88 96874 <br> +00 88 96875</p>
                    </div>
                </div>
                <div class="row">
                      <div class="col-sm-12">
                      @if (session()->has('message'))
                      <div class="alert alert-success">
                          {{session('message')}}
                      </div>
                      @endif
                    </div>
                   </div> 
                <div class="col-12">
                    <div class="contact_from mb-50">
                        <form action="{{route('sendcontact')}}" method="post" id="main_contact_form">
                            <div class="contact_input_area">
                                <div id="success_fail_info"></div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="f-name" placeholder="Name" required="">
                                        </div>
                                    </div>
                                
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Your E-mail" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="number" id="number" placeholder="Your Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Your Message *" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary w-100">Send Message</button>
                                    </div>
                                </div>
                            </div>
                            @csrf
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection