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
