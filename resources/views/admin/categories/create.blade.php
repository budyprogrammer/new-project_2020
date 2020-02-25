@extends('admin.dashboard')
@section('content')
	
  <div class="row" style="">
    <div class="col-lg-12">
      
    
<form action="@if(isset($categories)){{route('admin.category.update', $categories->id)}}@else{{route('admin.category.store')}}@endif" method="post" accept-charset="utf-8">
  @csrf
  @if(isset($categories))
  @method('PUT')
  @endif
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
    	<div class="col-sm-12">
      <label for="form-control-lable">Title</label>

      <input type="text" id="texturl" name="title" class="form-control" value="{{@$categories->title}}" placeholder="Category Title">
     
      
    	</div>
    </div>

    <div class="form-group row">
    
    	<div class="col-sm-12">
      <label for="form-control-lable">Description</label>
      <textarea class="form-control" name="description" id="ediitor"  value rows="4" cols="80" placeholder="Category description">{!!@$categories->description!!}</textarea>
    	</div>
    </div>		

    

    <div class="form-group row">
    	<div class="col-sm-12">
    	
    	
    		<input type="submit" name="submit" class="btn btn-primary" value="Add Category">
    	
    	</div>
    </div>

  </form>
</div>
</div>

 
@endsection
@section('script')
<script type="text/javascript" >
	$(function(){

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
</script>
@endsection
