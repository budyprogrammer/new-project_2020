@extends('admin.dashboard')
@section('content')

  <h2 class="modal-title">Add/Edit Products</h2>
<form  action="@if(isset($product)) {{route('admin.product.update',$product->id)}} @else {{route('admin.product.store')}} @endif" method="post" accept-charset="utf-8" enctype="multipart/form-data">
  <div class="row">
    @csrf
    @if(isset($product))
    @method('PUT')
    @endif
    <div class="col-lg-9">
      <div class="form-group row">
        <div class="col-sm-12">
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
        <div class="col-sm-12">
          @if (session()->has('message'))
          <div class="alert alert-success">
            {{session('message')}}
          </div>
          @endif
        </div>
        <div class="col-lg-12">
          <label class="form-control-label">Title: </label>
          <input type="text" id="txturl" name="title" class="form-control " value="{{@$product->title}}" placeholder="Product Title" />
          
        </p>
      </div>
    </div>
    <div class="form-group row">
      
      <div class="col-lg-12">
        <label class="form-control-label">Description: </label>
        <textarea name="description" rows="3" id="editor" class="form-control" placeholder="Product Description">{!! @$product->description !!}</textarea>
      </div>
    </div>
    <div class="form-group row">
      <div class="col-6">
        <label class="form-control-label">Admin Price: </label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Rs:</span>
          </div>
          <input type="text" class="form-control" placeholder="0.00" aria-label="admin_price" aria-describedby="basic-addon1" name="admin_price" value="{{@$product->admin_price}}" />
        </div>
      </div>
      <div class="col-6">
        <label class="form-control-label">User price: </label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1">Rs:</span>
          </div>

          <input type="text" class="form-control" name="user_price" placeholder="0.00" aria-label="user_price" aria-describedby="basic-addon1" value="{{@$product->user_price}}" />
        </div>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Add Product</button>
  </div>
  <div class="col-lg-3">
    <ul class="list-group row">
    
      <li class="list-group-item active"><h5>Feaured Image</h5></li>
      <li class="list-group-item">
        <div class="input-group mb-3">
          <div class="custom-file ">
            <input type="file"  class="custom-file-input" name="product_image" id="product_image">
            <label class="custom-file-label" for="product_image">Choose file</label>
          </div>
        </div>
        <div class="img-product_image  text-center">
            <!--   <img width="100"  src="@if(isset($products)) {{asset('images/'.$products->product_image)}} @else {{asset('images/no-product_image.jpeg')}} @endif" id="imgproduct_image" class="img-fluid" alt="">         -->
                      <img src="@if(isset($product)) {{asset('images/'.$product->product_image)}} @else {{asset('images/product_image.jpeg')}} @endif" id="imgproduct_image" class="img-fluid" alt="">


        </div>
      </li>
      <li class="list-group-item">
        <div class="col-12">
          <div class="input-group mb-3">
            <p type="text" class="form-control" name="featured" placeholder="0.00" aria-label="featured" aria-describedby="featured" >Featured Product</p>
          </div>
        </div>
      </li>
      
      <li class="list-group-item active"><h5>Select Categories</h5></li>
      <div class="col-sm-12">
      <label for="form-control-lable"></label>
      @php
      $ids = (isset($product) && $product->categories->count() > 0 ) ? array_pluck($product->categories->toArray(), 'id') : null;
      @endphp
      <li class="list-group-item active"><h5>Select Categories</h5></li>
      <li class="list-group-item ">
        <select name="category_id[]" id="select2" class="form-control" >
             <option selected>Select Category</option>
          @if($categories->count() > 0)
          @foreach($categories as $category)
          <option value="{{$category->id}}"
            @if(!is_null($ids) && in_array($category->id, $ids))
            {{'selected'}}
            @endif
          >{{$category->title}}</option>
          @endforeach
          @endif
        </select>
      </li> 
    </div>
  </ul>
         <!--  <select class="custom-select" name="category_id[]" id="parent_id" class="form-control">
            @if(isset($categories)) 

              <option selected>Open this select Category</option>
              @foreach($categories as $cat)
              <option value="{{$cat->id}}"))>{{$cat->title}}</option>
                   
                
                  
              @endforeach
              @endif
          </select> -->
      </div>

    </div>    
    </ul>
  </div>
     
</div>

</form> 
@endsection
@section('script')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" >
	$(document).ready(function(){

	ClassicEditor.create( document.querySelector( '#ediitor' ),{
	toolbar: ['Heading', 'Link','bold','italic','bulletedList','numberedList','blockQuote','undo','redo'],
	} ).then( editor => {
	
	}).catch( error => {
	console.error( 'There was a problem initializing the editor.', error );
	} );
	$('#texturl').on('keyup',function(){
	var url = slugify($(this).val());
	$('#url').html(url);
	$('#slug').val(url);
	})
$('#parent_id').select2({
	placeholder: "select a parent category",
	allowlClear: true,
	minimumResultsForSearch: Infinity
});
})

$('#product_image').on('change', function() {
var file = $(this).get(0).files;
var reader = new FileReader();
reader.readAsDataURL(file[0]);
reader.addEventListener("load", function(e) {
var image = e.target.result;
$("#imgproduct_image").attr('src', image);
});
});
$('#btn-add').on('click', function(e){
  
    var count = $('.options').length+1;
    (function(data){
      
      $('#extras').append(data);
    })
})
$('#btn-remove').on('click', function(e){ 
  $('.options:last').remove();
})
$('#featured').on('change', function(){
  if($(this).is(":checked"))
    $(this).val(1)
  else
    $(this).val(0)
})



</script>
@endsection
