@extends('layouts.default')

@section('content')

 <!-- display success message -->
@if (Session::has('message'))
   <div class="alert alert-success">{{ Session::get('message') }}</div>
@endif
        
<div class="panel panel-success">
		<div class="panel-heading">Insert Stock</div>
		<form action="/home" method="post" enctype="multipart/form-data" onsubmit="return showLoad()">
		{{ csrf_field() }}
		<div class="panel-body">

			<label class="label-control">Stock Type</label> 
			<select name="stype" class="form-control" required="required">
				<option value=''>Please choose stock type</option>
				<option value='T-Shirt'>T-Shirt</option>
				<option value='Sweater'>Sweater</option>
				<option value='Jacket'>Jacket</option>
				<option value='Formal Shirt'>Formal Shirt</option>
			</select>
			@if ($errors->has('stype'))
                <span class="help-block alert alert-danger">
                    <strong>The Stock Type field is required.</strong>
                </span>
            @endif
			<br>

			<label class="label-control">Stock Name/Description</label> 
			<input type="text" name="sname" class="form-control" placeholder="Please input stock name/description" required="required">
			@if ($errors->has('sname'))
                <span class="help-block alert alert-danger">
                    <strong>The Stock Name/Description field is required.</strong>
                </span>
            @endif
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
					@if ($errors->has('ssize'))
		                <span class="help-block alert alert-danger">
		                    <strong>The Stock Size field is required.</strong>
		                </span>
		            @endif
				</div>
				

				<div class="col-md-2">
					<label class="label-control">Stock Quantity</label> 
					<input type="number" name="squantity" class="form-control" required="required" placeholder="Insert quantity" value="0">
					@if ($errors->has('squantity'))
		                <span class="help-block alert alert-danger">
		                    <strong>The Stock Quantity field is required.</strong>
		                </span>
		            @endif
				</div>
			</div>
			<br>

			
			<div class="row">
				<div class="col-md-5">
					<label class="label-control">Upload Photo</label> 
					<input type="file" name="fileUpload" class="form-control fileinput" data-show-upload="false" required="required">
					<i>Note: Only jpg,jpeg file allowed. Max size: 3MB</i>
					@if ($errors->has('fileUpload'))
		                <span class="help-block alert alert-danger">
		                    <strong>{{ $errors->first('fileUpload') }}</strong>
		                </span>
		            @endif
				</div>
			</div>
			<br>
		
	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Insert Data?');">Insert</button>
		<button type="reset" name="reset" class="btn btn-warning" onclick="return confirm('Reset/clear form?');">Reset</button>
	</div>
	</form>
</div>

<script type="text/javascript">
	// for bootstrap file input
	$(function(){
		 $("input.fileinput").fileinput({
            allowedFileExtensions: ["jpg", "jpeg"], // set allowed file format
            maxFileSize: 3000, //set file size limit, 1000 = 1MB
        });  
	});
</script>

@stop