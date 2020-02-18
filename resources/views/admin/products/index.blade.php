@extends('admin.dashboard')
@section('content')
<div class="container">
<h2>Product</h2>
<a href="{{route('admin.product.create')}}" class="btn btn-primary float-right">add product</a>
<div class="table table-responsive">
	   <div class="col-sm-12">
		 @if (session()->has('message'))
		    <div class="alert alert-success">
		        {{session('message')}}
		    </div>
   		 @endif
  </div>
	<table class="table table-striped table-sm ">
		<thead>
			<tr>
				<th>#</th>
				<th>Title</th>
				<th>Description</th>
				<th>Categories</th>
				<th>Admin price</th>
				<th>user price</th>
				<th></th>
				<th>created at</th>
				<th>action</th>
			</tr>
		</thead>
			<tbody>
				@if($products->count() > 0)
				@foreach($products as $product)
				<tr>
					<td>{{$product->id}}</td>
					<td>{{$product->title}}</td>
					<td>{{$product->description}}</td>
					
					<td>
						@if($product->categories()->count()>0)
						@foreach($product->categories as $children)
						{{$children->title}}
						@endforeach
						@else
						<strong>{{$product->category_id}}</strong>
						@endif
					</td>

					<td>
						Rs:{{$product->admin_price}}
					</td>
					<td>
						Rs:{{$product->user_price}}
					</td>
					<td>
					<img height="40" width="40" src="{{asset('images/'.$product->product_image)}}">
						
					</td>
					<td>
						{{$product->created_at->format('M D Y')}}
					</td>

					<td>
						<a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-primary">edit</a>
						<a href="javascript:;" class="btn btn-sm btn-danger" 
						onclick="confirmDelete('{{$product->id}}')">delete</a>
                         <form id="delete-product-{{$product->id}}" action="{{route('admin.product.destroy',$product->id)}}" method="post" style="display: none;">
							@method('DELETE')
							@csrf
						</form>

						
					</td>

				</tr>
				@endforeach
				@endif
			</tbody>
	
	</table>
</div>
<div class="row">
	<div class="col-lg-12">
		
	</div>
</div>
</div>
@endsection

 @section('script')
 	<script type="text/javascript">
 		function confirmDelete(id) {
 			let choice = confirm('are you sure you want to record delete');
 			if(choice){document.getElementById('delete-product-'+id).submit()}
 		}
 	</script>
 @endsection
