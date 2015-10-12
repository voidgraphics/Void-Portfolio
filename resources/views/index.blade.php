@extends( "layout" )

@section( "page-title" )
Home - Void Graphics
@stop

@section( "css" )
<link rel="stylesheet" href="{{ asset( '/css/index.css' ) }}">
@stop

@section( "content" )
<h1 class="title--hidden">Homepage</h1>
<header class="header">
	<div class="header__content">
		<img src="{{ asset( '/img/logo.svg' ) }}" alt="Void Graphics Logo" class="header__logo--image">
		<div class="header__logo--text">Void graphics</div>
		<p class="welcome">
			<span class="welcome__greeting">Hello!</span>
			<span class="welcome__about">
				I'm a Belgian graphics design student specialised in creating beautiful, efficient and fun applications for smartphones, desktop and the web.
			</span>
		</p>
		<a href="" class="contact-btn"><span class="contact-btn__text">Contact me</span><span class="contact-btn__bg"></span></a>
		<button class="scrolldown-btn"></button>
	</div>
</header>
<section class="about section">
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
</section>
<section class="recent-works section">
	<h2 class="section__heading">Some of my latest work</h2>
	<div class="wrap">
		@foreach($works as $work)
			<article class="row-3 work-preview">
				<div class="hidden works-slug">{{ $work->slug }}</div>
				<div class="work-preview__thumb-container">
					<a href="/works/{{ $work->slug }}" class="work-preview__link">
						<img src="{{ asset( $work->thumbnail_path ) }}" class="work-preview__thumbnail" alt="" width="100%"/>
					</a>
				</div>
				<h3 class="work-preview__heading">
					<a href="/works/{{ $work->slug }}" class="work-preview__link">{{ $work->title }}</a>
				</h3>
				<hr>
				<time class="work-preview__date">
					{{ \Carbon\Carbon::instance($work->created_at)->toFormattedDateString() }}
				</time>
			</article>
		@endforeach
		<div class="btn-container">
			<a href="#" class="btn" id="viewmore-work">
				<span class="btn__text">View more works</span>
				<span class="btn__bg"></span>
			</a>
		</div>
	</div>
</section>
<section class="blog section">
	<h2 class="section__heading">Sometimes I also write blog posts</h2>
	<div class="wrap">
		@foreach($posts as $post)
		<article class="row-3 blog__post-preview">
			<header>
				<h3 class="post__heading">
					<a href="/posts/{{ $post->slug }}" class="post__heading__link">{{ $post->title }}</a>
				</h3>
				<hr>
				<time class="post__date">
					{{ \Carbon\Carbon::instance($post->created_at)->toFormattedDateString() }}
				</time>
			</header>
			<div class="post__body">
				<p>
					{{ str_limit($post->body, 300, '...') }}
				</p>
			</div>
			<footer class="post__footer">
				<a href="/posts/{{ $post->slug }}" class="post__footer__link">Read this blog entry</a>
			</footer>
			<div class="hidden posts-slug">{{ $post->slug }}</div>
		</article>
		@endforeach
		<div class="btn-container">
			<a href="#" class="btn" id="viewmore-post">
				<span class="btn__text">View more blog posts</span>
				<span class="btn__bg"></span>
			</a>
		</div>
	</div>
</section>
<section class="contact section">
	<h2 class="section__heading">Here's an easy way to contact me</h2>
	<div class="wrap">
		<div class="row-3 contact__info">
			<h3 class="contact__info__heading">Want to get in touch?</h3>
			<hr>
			<p class="contact__info__body">
				You can send me an e-mail at <a href="mailto:contact@void.graphics">contact@void.graphics</a> using your favourite e-mail client, or you can simply use this convenient form to do exactly the same thing. Up to you!
			</p>
		</div>
		<form class="row-3 contact__form" action="index.html" method="post">
			<div>
				<label for="subject">Subject</label>
				<input type="text" name="subject">
				<label for="email">Your e-mail</label>
				<input type="email" name="email">
				<label for="message">Message</label>
				<textarea name="message" rows="8" cols="40"></textarea>
				<button type="submit" name="send" value="send" class="btn">
					<span class="btn__text">Send message</span>
					<span class="btn__bg"></span>
				</button>
			</div>
		</form>
		<div class="row-3 contact__social">
			<h3 class="contact__social__heading">Find me on social media</h3>
			<hr>
			<a href="https://dribbble.com/Nittiyh" class="contact__social__link" title="dribbble">
				<?= '<?xml version="1.0" encoding="utf-8"?>'; ?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><g id="dribble"><path fill="#0F0F0F" d="M14.637,4.778c-0.126,0.179-1.179,1.595-3.666,2.527C9.824,5.198,8.554,3.469,8.361,3.21C8.886,3.083,9.435,3.015,10,3.015C11.777,3.015,13.401,3.682,14.637,4.778L14.637,4.778z M10.489,10.071c-3.608,1.166-5.528,4.345-5.686,4.616c-1.117-1.241-1.798-2.88-1.798-4.677c0-0.071,0.002-0.143,0.004-0.214c0.306,0.006,3.696,0.05,7.189-0.996c0.2,0.392,0.391,0.79,0.567,1.188C10.672,10.014,10.58,10.042,10.489,10.071z M10,0.64c-5.169,0-9.36,4.19-9.36,9.36s4.19,9.36,9.36,9.36s9.36-4.19,9.36-9.36S15.169,0.64,10,0.64z M10,18.19c-4.516,0-8.19-3.674-8.19-8.19S5.484,1.81,10,1.81s8.19,3.674,8.19,8.19S14.516,18.19,10,18.19z M11.973,9.358c-0.145-0.341-0.302-0.68-0.464-1.013c2.587-1.056,3.758-2.558,3.906-2.758c0.974,1.19,1.564,2.706,1.58,4.357c-0.231-0.049-2.543-0.517-4.871-0.225C12.074,9.599,12.025,9.479,11.973,9.358L11.973,9.358z M9.619,7.726C6.348,8.594,3.466,8.582,3.153,8.578C3.607,6.407,5.069,4.603,7.026,3.68C7.211,3.933,8.46,5.666,9.619,7.726L9.619,7.726zM11.194,11.161c0.015-0.006,0.03-0.01,0.046-0.015c0.982,2.552,1.388,4.691,1.492,5.305c-0.839,0.357-1.763,0.555-2.732,0.555c-1.618,0-3.108-0.552-4.294-1.477C5.832,15.271,7.248,12.536,11.194,11.161L11.194,11.161z M12.55,10.822c2.192-0.351,4.118,0.224,4.357,0.299c-0.312,1.946-1.429,3.627-2.999,4.689C13.837,15.384,13.464,13.337,12.55,10.822L12.55,10.822z"/></g></svg>
			</a>
			<a href="https://www.facebook.com/adrien.leloup.9" class="contact__social__link" title="fb">
				<?= '<?xml version="1.0" encoding="utf-8"?>'; ?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><g><path d="M19.496,0.089H0.505c-0.23,0-0.416,0.186-0.416,0.416v18.991c0,0.23,0.186,0.416,0.416,0.416h10.09v-6.624H8.465c-0.184,0-0.333-0.149-0.333-0.333v-2.685c0-0.184,0.149-0.333,0.333-0.333h2.13V8.083c0-2.442,1.538-4.02,3.917-4.02l2.118,0.003c0.184,0,0.333,0.149,0.333,0.333v2.493c0,0.184-0.149,0.333-0.333,0.333l-1.427,0.001c-0.983,0-1.163,0.383-1.163,1.138v1.571h2.491c0.088,0,0.173,0.035,0.236,0.098c0.062,0.063,0.098,0.147,0.098,0.236l-0.001,2.685c0,0.184-0.149,0.333-0.333,0.333h-2.49v6.623h5.456c0.23,0,0.416-0.186,0.416-0.416V0.505C19.911,0.275,19.725,0.089,19.496,0.089z"/></g></svg>
			</a>
			<a href="https://github.com/voidgraphics" class="contact__social__link" title="github">
				<?= '<?xml version="1.0" encoding="utf-8"?>'; ?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><g id="github"><path fill="#0F0F0F" d="M10,0.408c-5.297,0-9.592,4.294-9.592,9.592S4.703,19.592,10,19.592s9.592-4.294,9.592-9.592S15.297,0.408,10,0.408z M15.696,15.696c-0.74,0.74-1.602,1.321-2.561,1.727c-0.243,0.103-0.491,0.194-0.742,0.271v-1.437c0-0.756-0.259-1.311-0.777-1.667c0.325-0.031,0.623-0.075,0.894-0.131c0.271-0.056,0.559-0.138,0.862-0.243c0.302-0.107,0.575-0.233,0.815-0.379s0.472-0.337,0.693-0.572c0.222-0.235,0.408-0.499,0.557-0.796c0.15-0.297,0.268-0.652,0.356-1.068c0.087-0.415,0.131-0.872,0.131-1.372c0-0.968-0.315-1.792-0.946-2.473c0.287-0.749,0.256-1.564-0.094-2.445l-0.235-0.028c-0.162-0.018-0.455,0.05-0.876,0.206c-0.42,0.155-0.893,0.411-1.417,0.767c-0.743-0.206-1.515-0.309-2.314-0.309c-0.805,0-1.574,0.103-2.304,0.309C7.407,5.832,7.093,5.647,6.796,5.5C6.5,5.353,6.262,5.253,6.084,5.2C5.907,5.147,5.741,5.114,5.588,5.101c-0.153-0.013-0.251-0.016-0.295-0.01C5.25,5.098,5.218,5.104,5.199,5.111c-0.35,0.887-0.381,1.702-0.093,2.444C4.475,8.236,4.159,9.06,4.159,10.028c0,0.499,0.044,0.957,0.131,1.372c0.087,0.415,0.206,0.771,0.356,1.068c0.15,0.297,0.335,0.562,0.557,0.796c0.222,0.235,0.453,0.424,0.693,0.572c0.24,0.147,0.512,0.273,0.815,0.379c0.302,0.107,0.59,0.187,0.862,0.243c0.271,0.056,0.57,0.1,0.894,0.131c-0.512,0.35-0.768,0.905-0.768,1.667v1.465c-0.283-0.084-0.562-0.183-0.835-0.299c-0.959-0.406-1.821-0.987-2.561-1.727s-1.321-1.602-1.727-2.561c-0.418-0.99-0.63-2.045-0.63-3.133s0.213-2.143,0.633-3.135c0.406-0.959,0.987-1.821,1.727-2.561s1.601-1.321,2.56-1.727C7.857,2.157,8.912,1.945,10,1.945s2.143,0.213,3.135,0.633c0.959,0.406,1.821,0.987,2.561,1.727c0.74,0.74,1.321,1.602,1.727,2.561c0.42,0.992,0.632,2.047,0.632,3.135s-0.213,2.143-0.633,3.135C17.017,14.094,16.436,14.956,15.696,15.696L15.696,15.696z"/></g></svg>
			</a>
			<a href="https://be.linkedin.com/pub/adrien-leloup/94/697/b51" class="contact__social__link" title="linkedin">
				<?= '<?xml version="1.0" encoding="utf-8"?>'; ?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><g><path id="LinkedIn" d="M18.634,11.866v6.384h-3.701v-5.956c0-1.496-0.535-2.517-1.875-2.517c-1.023,0-1.631,0.688-1.899,1.354c-0.098,0.238-0.123,0.569-0.123,0.902v6.217H7.334c0,0,0.05-10.088,0-11.133h3.702v1.578c-0.008,0.012-0.017,0.025-0.024,0.036h0.024V8.695c0.492-0.758,1.37-1.84,3.336-1.84C16.808,6.855,18.634,8.446,18.634,11.866z M3.461,1.75c-1.267,0-2.095,0.831-2.095,1.923c0,1.069,0.804,1.925,2.046,1.925h0.025c1.291,0,2.094-0.856,2.094-1.925C5.506,2.581,4.728,1.75,3.461,1.75z M1.586,18.25h3.701V7.117H1.586V18.25z"/></g></svg>
			</a>
			<a href="https://www.youtube.com/channel/UCnONehwfCT_iaIGUCD1IxsQ" class="contact__social__link" title="youtube">
				<?= '<?xml version="1.0" encoding="utf-8"?>'; ?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg version="1.1" id="youtube" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><path fill="#0F0F0F" d="M19.491,5.255c-0.201-1.074-1.095-1.876-2.122-1.975c-2.453-0.157-4.915-0.285-7.372-0.287c-2.458-0.001-4.91,0.124-7.364,0.279c-1.031,0.1-1.925,0.897-2.125,1.975C0.279,6.8,0.165,8.368,0.165,9.935s0.114,3.135,0.342,4.688c0.2,1.078,1.094,1.971,2.125,2.07c2.454,0.155,4.905,0.313,7.364,0.313c2.457,0,4.921-0.138,7.372-0.297c1.027-0.1,1.922-1.019,2.122-2.093c0.23-1.55,0.344-3.116,0.344-4.682C19.835,8.37,19.72,6.805,19.491,5.255z M7.77,12.759V7.044l5.323,2.858L7.77,12.759z"/></svg>
			</a>
			<a href="http://nittiyh.deviantart.com" class="contact__social__link" title="deviantart">
				<?= '<?xml version="1.0" encoding="utf-8"?>'; ?><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd"><svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="20px" height="20px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve"><g id="Calque_1_1_"><path d="M15.975,3.826l-3.536,6.792l0.28,0.362h3.256v4.843h-5.917l-0.514,0.35L7.888,19.36l-0.35,0.35H4.025v-3.536L7.561,9.37l-0.28-0.35H4.025V4.176h5.917l0.514-0.35l1.657-3.186l0.35-0.35h3.513L15.975,3.826L15.975,3.826z"/></g></svg>
			</a>
		</div>
	</div>
</section>
<section class="intothevoid section">
	<h2 class="section__heading">Want to see more?</h2>
	<hr>
	<a href="http://www.intothevoid.space" class="intothevoid__link">www.intothevoid.space</a>
</section>
@stop

@section("scripts")
	<script type="text/javascript" src="{{ asset( '/js/jquery.js' ) }}"></script>
	<script type="text/javascript" src="{{ asset( '/js/scroll.js' ) }}"></script>
	<script type="text/javascript" src="{{ asset( '/js/viewmore.js' ) }}"></script>
@stop
