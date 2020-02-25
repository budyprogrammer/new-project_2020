@extends('admin.dashboard')
@section('content')


<h2>One customer Order Detail</h2>

	  
 
  <div class="row text-center" id="div-id-name">
  		<div class="col-sm">
  			
			 <img width="90" src="{{asset('images/'.$orders['products']->product_image)}}">
			 <h2>{{$orders['products']['title']}}</h2>
			   
       </div>
 		<div class="col-sm">
 			<table class="table table-responsive">
 				<tr>
 					
 				
			    <th>Name</th>
			    <th>Email</th>
			    <th>Address</th>
			    <th>Number</th>
			    <th>Quantity</th>
			    <th>Price</th>
			    <th>created_at</th>
			     
 				</tr>	
 				<tr>
 					
						   
			    <td>|{{$orders['customers']['name']}}|</td>
			    <td>|{{$orders['customers']['email']}}|</td>
			    <td>|{{$orders['customers']['address']}}|</td>
			    <td>|{{$orders['customers']['number']}}|</td>
			    <td>|{{$orders['qty']}}|</td>
			    <td>|Rs:{{$orders['user_price']}}|</td>
			    <td>|{{$orders['created_at']}}|</td>

 				</tr>

 			</table>
 			</div>
 	</div> 			
 			<a href="#" id="printpage" onclick="javascript:printlayer('div-id-name')" class="btn btn-primary float-right">Order Print</a>
				


@endsection
				
@section('script')
 	<script type="text/javascript">
 		function printlayer(layer) {
 			
 		var generator = window.open(",'name,");
 		var layetext = document.getElementById(layer);
 		generator.document.write(layetext.innerHTML.replace("Print Me"));
 		generator.document.close();
 		generator.print();
 		generator.close();
 		}
 	</script>
 @endsection


					


 