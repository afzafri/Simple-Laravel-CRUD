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
			
			<?php

			foreach ($liststock as $liststock) 
			{
				$STK_ID = $liststock->STK_ID;
				$STK_TYPE = $liststock->STK_TYPE;
				$STK_NAME = $liststock->STK_NAME;
				$STK_SIZE = $liststock->STK_SIZE;
				$STK_QTY = $liststock->STK_QTY;

			
				?>
				<tr>
					<td>{{$STK_ID}}</td>
					<td>{{$STK_TYPE}}</td>
					<td>{{$STK_NAME}}</td>
					<td><img src='{{asset("/images/$STK_ID.jpg")}}' width="150px" height="150px" class="img-thumbnail img-responsive" title="{{$STK_NAME.' '.$STK_TYPE}}"/></td>
					<td>{{$STK_SIZE}}</td>
					<td>{{$STK_QTY}}</td>
					
					
					<td align="center"><a href='/edit/{{$STK_ID}}' data-toggle="tooltip" title="Update Stock" class='btn btn-success' onclick='return confirm("Edit stock?");'><i class='fa fa-fw fa-gear'></i></a>
					<button type='submit' class='btn btn-danger' onclick='return confirm("Delete stock?");' data-toggle="tooltip" title="Delete Stock"><i class='fa fa-fw fa-trash'></i></button></td>
					<td style='display:none;'><input type='text' name='delstock' value='{{$STK_ID}}' style='display:none;'></td>
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
				</tr>

				<?php

			}

			?>

			</tbody>
				</table>
				</form>
			</div>
		</div>
</div>

@stop