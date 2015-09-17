<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>
		@yield( "page-title" )
	</title>
	<link rel="stylesheet" href="{{ asset( '/css/normalize.css' ) }}" media="screen" title="no title" charset="utf-8">
	<link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	@yield( "css" )
</head>
<body>
	@yield( "content" )
	@yield( "scripts" )
</body>
</html>
