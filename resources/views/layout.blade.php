<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield( "page-title" )
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"><meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="{{ asset( '/css/normalize.css' ) }}" media="screen">
	<link rel="stylesheet" href="{{ asset( '/css/fontawesome.min.css' ) }}" media="screen">
	<link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	@yield( "css" )
</head>
<body>
	@yield( "content" )
	<footer class="page-footer">
		<img src="{{ asset( '/img/logo.svg' ) }}" alt="" />
	</footer>
	@yield( "scripts" )
</body>
</html>
