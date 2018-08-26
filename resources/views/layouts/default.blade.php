<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD Laravel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/design.css') }}">
	<link rel="stylesheet" href="{{ asset('css/fileinput.min.css') }}">
	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/fileinput.min.js')}}"></script>

	<script>

		$(document).ready(function(){

			//hide loading animation
			$('.overlay').hide();
	     	$('.sk-folding-cube').hide();

	     	// Remove active for all items.
			$('.navbar-nav li').removeClass('active');

			var url = window.location;

			// for sidebar menu entirely but not cover treeview
			$('ul.navbar-nav a').filter(function() {
			  return this.href == url;
			}).parent().addClass('active');

		 });

		// when called, will show loading animation
		function showLoad($msg)
		{
			return confirm($msg);
			$('.overlay').show();
	  	$('.sk-folding-cube').show();
		}

	</script>
</head>
<body>

	<!-- nav bar-->
	<div class="navbar navbar-default">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	     <a class="navbar-brand" href="#">Simple CRUD Laravel</a>
	    </div>

	    <div class="collapse navbar-collapse">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="/home" >Insert Stocks</a></li>
	        <li class="active"><a href="/view" >View Stocks</a></li>
	        <li class="active"><a href="/search" >Search Stocks</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li>
	              <a href="{{ url('/logout') }}"
	                  onclick="event.preventDefault();
	                           document.getElementById('logout-form').submit();">
	                  Logout
	              </a>

	              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
	                  {{ csrf_field() }}
	              </form>
	            </li>
	          </ul>
	        </li>
	    </div><!--/.nav-collapse -->

	</div>



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
