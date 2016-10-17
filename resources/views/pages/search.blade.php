@extends('layouts.default')

@section('content')

<div class="panel panel-success">
		<div class="panel-heading">Search Stock</div>
		<form action="/search" method="post">
		<div class="panel-body">
			<label class="label-control">Stock Name</label> 
			<input type="text" name="sname" class="form-control" placeholder="Please input stock name/description" required="required">
			<br>
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		
	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success">Search</button>
	</div>
	</form>
</div>

@stop