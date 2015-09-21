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
<div class="about section">
	<div class="wrap">
		<h2 class="section__heading about__heading">A few words about me</h2>
		<div class="row-3 about__info">
			<h3 class="about__info__heading">Adrien Leloup, 21, Belgian, student.</h3>
			<p class="about__info__text">
				I am an ambitious 21 year-old from Belgium.
	I have a deep passion for crafting experiences for people through technology - be it websites or mobile &amp; desktop apps. My journey started by creating custom themes for Windows: modifying resource images in system files to give the user’s computer a brand new look &amp; feel. I quickly fell in love with this concept, which led me to start studies in this field.
			</p>
		</div>
		<div class="row-3 about__picture">
			<img src="{{ asset( '/img/face.png' ) }}" alt="Picture of me"  width="291" height="424"/>
		</div>
		<div class="row-3 about__info">
			<h3 class="about__info__heading">My skills</h3>
			<p class="about__info__text">
				I am skilled in both front &amp; back end development for the web.
	My front end skills include HTML, CSS, JavaScript, and the use of front-oriented frameworks such as Jade, SASS &amp; Compass, and CoffeeScript.
	My back end skills include PHP, node.js and Ruby, including a few frameworks such as Laravel and Rails.
	I also do iOS and OS X development using Swift.
			</p>
		</div>
	</div>
</div>
<div class="recent-works section">
	<h2 class="section__heading">Some of my latest work</h2>
</div>
<div class="blog section">
	<h2 class="section__heading">Sometimes I also write blog posts</h2>
	<div class="wrap">
		<article class="row-3 blog__post">
			<header>
				<h3 class="blog__post__heading">
					<a href="#" class="blog__post__heading__link">Daft Punk's Electroma</a>
				</h3>
				<hr class="blog__post__header-separator">
				<p class="blog__post__date">
					Wed 9 June 2015
				</p>
			</header>
			<main class="blog__post__body">
				Who's brave enough to fly into something we all keep calling a <em>death sphere</em>? I meant 'physically'. Look, perhaps you could let me work for a little food? I could clean the floors or paint a fence, or service you sexually? Fry! Quit doing the right thing, you jerk! With gusto. And yet you haven't said what I told you&nbsp;...
			</main>
			<footer class="blog__post__footer">
				<a href="#" class="blog__post__footer__link">Read this blog entry</a>
			</footer>
		</article>
		<article class="row-3 blog__post">
			<header>
				<h3 class="blog__post__heading">
					<a href="#" class="blog__post__heading__link">Daft Punk's Electroma</a>
				</h3>
				<hr class="blog__post__header-separator">
				<p class="blog__post__date">
					Wed 9 June 2015
				</p>
			</header>
			<main class="blog__post__body">
				Who's brave enough to fly into something we all keep calling a <em>death sphere</em>? I meant 'physically'. Look, perhaps you could let me work for a little food? I could clean the floors or paint a fence, or service you sexually? Fry! Quit doing the right thing, you jerk! With gusto. And yet you haven't said what I told you&nbsp;...
			</main>
			<footer class="blog__post__footer">
				<a href="#" class="blog__post__footer__link">Read this blog entry</a>
			</footer>
		</article>
		<article class="row-3 blog__post">
			<header>
				<h3 class="blog__post__heading">
					<a href="#" class="blog__post__heading__link">Daft Punk's Electroma</a>
				</h3>
				<hr class="blog__post__header-separator">
				<p class="blog__post__date">
					Wed 9 June 2015
				</p>
			</header>
			<main class="blog__post__body">
				Who's brave enough to fly into something we all keep calling a <em>death sphere</em>? I meant 'physically'. Look, perhaps you could let me work for a little food? I could clean the floors or paint a fence, or service you sexually? Fry! Quit doing the right thing, you jerk! With gusto. And yet you haven't said what I told you&nbsp;...
			</main>
			<footer class="blog__post__footer">
				<a href="#" class="blog__post__footer__link">Read this blog entry</a>
			</footer>
		</article>
		<a href="#" class="btn">
			<span class="btn__text">View more blog posts</span>
			<span class="btn__bg"></span>
		</a>
	</div>
</div>
<div class="contact section">

</div>
<div class="intothevoid section">

</div>
@stop
