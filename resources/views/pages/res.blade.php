@extends('layouts.default')

@section('content')

<div class="panel panel-success">
		<div class="panel-heading">Search Result</div>
		<div class="panel-body">

			<div class='table-responsive'>
			<form action="/view" method="post">
			  <table class='table table-bordered table-hover'>
			    <thead>
			      <tr>
			        <th>ID</th>
			        <th>TYPE</th>
			        <th>NAME/DESCRIPTION</th>
			        <th>SIZE</th>
			        <th>QUANTITY</th>
			      </tr>
			    </thead>
			    <tbody>
				
				<?php

				foreach ($search as $search) 
				{
					$STK_ID = $search->STK_ID;
					$STK_TYPE = $search->STK_TYPE;
					$STK_NAME = $search->STK_NAME;
					$STK_SIZE = $search->STK_SIZE;
					$STK_QTY = $search->STK_QTY;

				
					?>
					<tr>
						<td>{{$STK_ID}}</td>
						<td>{{$STK_TYPE}}</td>
						<td>{{$STK_NAME}}</td>
						<td>{{$STK_SIZE}}</td>
						<td>{{$STK_QTY}}</td>
					</tr>

					<?php

				}

				?>

				</tbody>
					</table>
					</form>
				</div>

		</div>
		<div class="panel-footer">
			<a href="/search" class="btn btn-warning">Back To Search</a>
		</div>
</div>

@stop