<!DOCTYPE html>
<html>
<head>
	@include('includes.head')
</head>
<body>

@include('includes.header')

<div class="container">
	
	@yield('content')

</div>

<div class="footer" style="text-align:center">
Simple CRUD Web App using Laravel Framework. Dev by Afif Zafri.
</div>

<div class="overlay">
  <div class="popup">
		<div class="sk-folding-cube">
		  <div class="sk-cube1 sk-cube"></div>
		  <div class="sk-cube2 sk-cube"></div>
		  <div class="sk-cube4 sk-cube"></div>
		  <div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
</div>
	
</body>
</html>