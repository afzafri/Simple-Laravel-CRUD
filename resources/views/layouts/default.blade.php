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
</body>
</html>