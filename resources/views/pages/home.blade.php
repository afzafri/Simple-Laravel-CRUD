@extends('layouts.default')

@section('content')

<div class="panel panel-success">
		<div class="panel-heading">Insert Stock</div>
		<form action="/home" method="post" enctype="multipart/form-data">
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

			<div class="row">
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
			</div>
			<br>

			
			<div class="row">
				<div class="col-md-5">
					<label class="label-control">Upload Photo</label> 
					<input type="file" name="fileUpload" class="form-control" required="required">
					<i>Note: Only jpg,jpeg file allowed. Max size: 3MB</i>
				</div>
			</div>
			<br>

			<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
		
	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success" onclick="return ask()">Insert</button>
		<button type="reset" name="reset" class="btn btn-warning" onclick="return confirm('Reset/clear form?');">Reset</button>
	</div>
	</form>
</div>

<script type="text/javascript">
	function ask()
	{
		$res = confirm('Insert Data?');

		if($res)
		{
			$('.overlay').show();
  	   		$('.sk-folding-cube').show();
			return true;
		}
		else
		{
			return false;
		}

		return false;
	}
</script>

@stop