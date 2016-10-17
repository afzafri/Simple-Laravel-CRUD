@extends('layouts.default')

@section('content')

<div class="panel panel-success">
		<div class="panel-heading">Insert Stock</div>
		<form action="/" method="post">
		<div class="panel-body">
			<label class="label-control">Stock Type</label> 
			<select name="stype" class="form-control" required="required">
				<option value=''>Please choose stock type</option>
				<option value='T-Shirt'>T-Shirt</option>
				<option value='Sweater'>Sweater</option>
				<option value='Jacket'>Jacket</option>
				<option value='Formal Shirt'>Formal Shirt</option>
			</select>
			<br>
			<label class="label-control">Stock Name/Description</label> 
			<input type="text" name="sname" class="form-control" placeholder="Please input stock name/description" required="required">
			<br>
			<div class="col-md-3">
			<label class="label-control">Stock Size</label> 
			<select name="ssize" class="form-control" required="required">
				<option value=''>Please choose stock size</option>
				<option value='S'>S</option>
				<option value='M'>M</option>
				<option value='L'>L</option>
				<option value='XL'>XL</option>
			</select>
			</div>
			

			<div class="col-md-2">
			<label class="label-control">Stock Quantity</label> 
			<input type="number" name="squantity" class="form-control" required="required" placeholder="Insert quantity" value="0">
			</div>
			<br>
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		
	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Insert Data?');">Insert</button>
		<button type="reset" name="reset" class="btn btn-warning" onclick="return confirm('Reset/clear form?');">Reset</button>
	</div>
	</form>
</div>

@stop