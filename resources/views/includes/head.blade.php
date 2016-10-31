<title>Simple CRUD Laravel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/design.css') }}">
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

<script>

	$(document).ready(function(){

		//hide loading animation
		$('.overlay').hide();
     	$('.sk-folding-cube').hide();

	  	// Remove active for all items.
		  $('.navbar-nav li').removeClass('active');

		  
		  // highlight submenu item
		  var locations = this.location.pathname;
		  //var newloc = "." + locations.substring(8);
		  $('li a[href="' + locations + '"]').parent().addClass('active');
		  //console.log(locations);

		  if(locations == "/")
		  {
		    $('li a[href="/"]').parent().addClass('active');
		  }
	 });
	
	
</script>