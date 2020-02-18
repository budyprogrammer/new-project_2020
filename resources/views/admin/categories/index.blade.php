@extends('admin.dashboard')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			
<h2>all categories</h2>
<a href="{{route('admin.category.create')}}" class="btn btn-primary float-right">add category</a>
<div class="table table-responsive">
	   <div class="col-sm-12">
		  	@if (session()->has('message'))
		    <div class="alert alert-success">
		       {{ session('message')}}
		    </div>
   		 @endif
  </div>
  <div class="table-responsive">
	<table class="table table-striped table-sm">
		<thead>
			<tr>
				<th>id</th>
				<th>Title</th>
				<th>Description</th>
				<th>Created at</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@if($categories->count() > 0)
			@foreach($categories as $category)
			<tr>

				<td>{{$category->id}}</td>
				<td>{{$category->title}}</td>
				<td>{{$category->description}}</td>
				
				<td>{{$category->created_at->format('M D Y')}}</td>
				<td>
					<a href="{{route('admin.category.edit',$category->id)}}" class="btn btn-primary">Edit</a>
					<a id="deletes" href="javascript:;" class="btn btn-danger"
						onclick="confirmDelete('{{$category->id}}')">delete</a>
						<form id="delete-category-id{{$category->id}}" action="{{route('admin.category.destroy',$category->id)}}" method="post">
							@method('DELETE')
							@csrf
						</form>
				</td>
			</tr>
			@endforeach
			@else

			<tr>
				<td colspan="5" class="text-center"> no category found</td>
			</tr>
			@endif
			
			</tbody>
		</table>
	</div>
		<div class="row">
	<div class="col-lg-12">
		{{$categories->links()}}
	</div>
</div>

     </div>
	</div>
  </div>	
</div>




@endsection

 @section('script')
 	<script type="text/javascript">
 		function confirmDelete(id) {
 			let choice = confirm('are you sure you want to record delete');
 			if(choice){
 				document.getElementById('delete-category-id'+id).submit()
 			}
 			
 		}
 	</script>
 @endsection
