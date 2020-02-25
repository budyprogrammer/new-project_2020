@extends('admin.dashboard')
@section('content')
<div class="row text-center">
<div class="col-sm">
<h2>All Orders</h2>

<div class="table table-responsive">
	   <div class="col-sm">
		 @if (session()->has('message'))
		    <div class="alert alert-success ">
		        {{session('message')}}
		    </div>
   		 @endif
  </div>
  <div class="container " >
	<table class="table table-striped" style="width: 90% !important;">
		<thead>
			<tr>
				<th>id</th>
				<th>CustomerName</th>
				<th>CustomerEmail</th>
				<th>CustomerAddress</th>
				<th>CustomerNumber</th>
				<th>ProductQuantity</th>
				<th>userPrice</th>
				<th>ProductImage</th>
				<th>createdat</th>
				<th>action</th>
			</tr>
		</thead>
			<tbody style="width: 90% !important;">

				
				
				@if($orders->count() > 0)
				@foreach($orders as $order)
				<tr>
					<td>{{$order->id}}</td>
					<td> {{$order->customers->name}} </td>
			      	
				   
					<td>{{$order->customers->email}}</td>
					<td>{{$order->customers->address}}</td>
					<td>{{$order->customers->number}}</td>
					<td>{{$order->qty}}</td>
					<td>Rs:{{$order->user_price}}</td>
					<td>
					<img height="40" width="40" src="{{asset('images/'.$order->products['product_image'])}}">
					</td>
					<td>
						{{$order->created_at->format('M D Y')}}
					</td>
					<td>
						<a href="{{route('admin.orderview',$order->id)}}" class="btn btn-primary">order view</a>
						<a href="javascript:;" class="btn btn-sm btn-danger" 
						onclick="confirmDelete('{{$order->id}}')">delete</a>
                         <form id="delete-order-{{$order->id}}" action="{{route('admin.orderdelete',$order->id)}}" method="post" style="display: none;">
							@method('DELETE')
							@csrf
						</form>

						
					</td>

				</tr>
				@endforeach
			
				@else
				<tr>
					<td colspan="11" class="text-center"> no orders found
					</td>
				</tr>
				@endif
			</tbody>	
	
	</table>
</div>

	<div class="row">
		<div class="col-lg-12">
			
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
 			if(choice){document.getElementById('delete-order-'+id).submit()}
 				console.log(id);
 		}
 	</script>
 @endsection


					


 