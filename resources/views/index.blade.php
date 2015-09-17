@extends( "layout" )

@section( "page-title" )
Home - Void Graphics
@stop

@section( "css" )
<link rel="stylesheet" href="{{ asset( '/css/index.css' ) }}">
@stop

@section( "content" )
<header class="header">
	<div class="header__content">
		<img src="{{ asset( '/img/logo.svg' ) }}" alt="Void Graphics Logo" class="header__logo--image">
		<h1 class="header__logo--text">Void graphics</h1>
		<p class="welcome">
			<span class="welcome__greeting">Hello!</span>
			<p class="welcome__about">
				I'm a Belgian graphics design student specialised in creating beautiful, efficient and fun applications for smartphones, desktop and the web.
			</p>
		</p>
		<a href="" class="contact-btn"><span class="contact-btn__text">Contact me</span><span class="contact-btn__bg"></span></a>
		<button class="scrolldown-btn"></button>
	</div>
</header>
@stop
