<!DOCTYPE html>
<html>
 <head>
	<title></title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- for ajax -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!--select2 theme  -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css">

	<!-- stylesheet -->
	<link rel="stylesheet" type="text/css" href="/css/app.css">

	<link rel="stylesheet" type="text/css" href="/css/header.css">

	<link rel="stylesheet" type="text/css" href="/css/footer.css">

	<script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>

		<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	@yield('additionalCSS')

</head>


<body>

	 @include('layouts.header')

	 @include('layouts/modal')

	@yield('contents')

	@include('layouts.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>



<!-- custom script -->
	<script type="text/javascript" src="/js/custom_script.js">
	</script>



</body>
</html>
