@extends('layouts.default')

@section('content')

<div class="panel panel-success">
		<div class="panel-heading">List Stock</div>
		
		<div class="panel-body">

		<div class='table-responsive'>
		<form action="/view" method="post">
		  <table class='table table-bordered table-hover'>
		    <thead>
		      <tr>
		        <th>ID</th>
		        <th>TYPE</th>
		        <th>NAME/DESCRIPTION</th>
		        <th>STOCK IMAGE</th>
		        <th>SIZE</th>
		        <th>QUANTITY</th>
		        <th>ACTION</th>
		      </tr>
		    </thead>
		    <tbody>
			<!-- iterate through the array of the stocks to display them -->
			@foreach($liststock as $liststocks) 
				<tr>
					<td>{{$liststocks->STK_ID}}</td>
					<td>{{$liststocks->STK_TYPE}}</td>
					<td>{{$liststocks->STK_NAME}}</td>
					<td><img src='{{asset("/images/$liststocks->STK_ID.jpg")}}' width="150px" height="150px" class="img-thumbnail img-responsive" title="{{$liststocks->STK_NAME.' '.$liststocks->STK_TYPE}}"/></td>
					<td>{{$liststocks->STK_SIZE}}</td>
					<td>{{$liststocks->STK_QTY}}</td>
					
					
					<td align="center"><a href='/edit/{{$liststocks->STK_ID}}' data-toggle="tooltip" title="Update Stock" class='btn btn-success' onclick='return confirm("Edit stock?");'><i class='fa fa-fw fa-gear'></i></a>
					<button type='submit' class='btn btn-danger' onclick='return confirm("Delete stock?");' data-toggle="tooltip" title="Delete Stock"><i class='fa fa-fw fa-trash'></i></button></td>
					<td style='display:none;'><input type='text' name='delstock' value='{{$liststocks->STK_ID}}' style='display:none;'></td>
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
				</tr>
			@endforeach
				
			</tbody>
				</table>
				</form>
				<!-- generate markup for pagination links -->
				<center>{{ $liststock->links() }}</center>
			</div>
		</div>
</div>

@stop