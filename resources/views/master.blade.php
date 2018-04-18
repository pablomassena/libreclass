<!doctype html>
<html lang="en">
<head>
	<title>
		Libreclass
		@yield('title')
	</title>
	<link rel="shortcut icon" href="{{{ asset("images/favicon.ico") }}}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no ">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="lib/bootstrap.min.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="lib/fa/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/validation.css">
	@yield('stylesheet')

	<script src="lib/jquery.min.js"></script>
	<script src="lib/bootstrap.min.js"></script>
	<script src="js/register.js"></script>
	<script src="js/menu.js"></script>

	@yield('scripts')

</head>
<body>
	@yield('body')
</body>
</html>
