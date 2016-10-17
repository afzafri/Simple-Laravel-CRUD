@extends('layouts.default')

@section('content')

<div class="panel panel-success">
		<div class="panel-heading">Edit Stock</div>
		<form action="/update" method="post">
		<div class="panel-body">
			<label class="label-control">Stock Type</label> 
			<select name="stype" class="form-control" required="required">
				<option value=''>Please choose stock type</option>
			<?php

				$types = array('T-Shirt','Sweater','Jacket','Formal Shirt');

				foreach($types as $types)
				{
					if($editstock->STK_TYPE == $types)
					{
						echo "<option value='$types' selected>$types</option>";
					}
					else
					{
						echo "<option value='$types'>$types</option>";
					}
				}
			?>
			</select>
			<br>
			<label class="label-control">Stock Name/Description</label> 
			<input type="text" name="sname" class="form-control" placeholder="Please input stock name/description" required="required" value="{{$editstock->STK_NAME}}">
			<br>
			<div class="col-md-3">
			<label class="label-control">Stock Size</label> 
			<select name="ssize" class="form-control" required="required">
				<option value=''>Please choose stock size</option>
				<?php
					$size = array('S','M','L','XL');
					foreach($size as $size)
					{
						if($editstock->STK_SIZE == $size)
						{
							echo "<option value='$size' selected>$size</option>";
						}
						else
						{
							echo "<option value='$size'>$size</option>";
						}
					}
				?>
			</select>
			</div>
			

			<div class="col-md-2">
			<label class="label-control">Stock Quantity</label> 
			<input type="number" name="squantity" class="form-control" required="required" placeholder="Insert quantity" value="{{$editstock->STK_QTY}}">
			</div>
			<br>
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
			<input type = "hidden" name = "sid" value = "{{$editstock->STK_ID}}">
		
	</div>
	<div class="panel-footer">
		<button type="submit" name="submit" class="btn btn-success" onclick="return confirm('Update Data?');">Update</button>
	</div>
	</form>
</div>

@stop