@extends('layout')

@section( "page-title" )
Work: {{ $work->title }} - Void Graphics
@stop

@section( "css" )
<link rel="stylesheet" href="{{ asset( '/css/work.css' ) }}">
@stop

@section('content')
<?php use \Michelf\Markdown; ?>
<h1 class="title--hidden">{{ $work->title }}</h1>
	<article class="post">
		<header class="hero">
			<img src="{{ asset( $work->img_path ) }}" alt="{{ $work->title }}" class="hero__bg"/>
		</header>
		<main class="post__content">
			<div class="wrap">
				<div class="content__container">
					<a href="{{ route( 'home' ) }}" class="home-btn">
						<svg version="1.1" id="Calque_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="36px" height="36px" viewBox="0 0 36 36" enable-background="new 0 0 36 36" xml:space="preserve"><g id="arrow"><line fill="none" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="11.5" y1="18.031" x2="26.5" y2="18.031"/><line fill="none" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="11.5" y1="18.031" x2="17.062" y2="12.469"/><line fill="none" stroke="#2E2E2E" stroke-width="2" stroke-linecap="round" stroke-miterlimit="10" x1="17.062" y1="23.594" x2="11.5" y2="18.031"/></g><circle id="circle" fill="none" stroke="#EC6759" stroke-width="2" stroke-miterlimit="10" cx="18.062" cy="18.031" r="16.562"/>
						</svg>
					</a>
					<h2 class="post__title">{{ $work->title }}</h2>
					<p class="post__category">{{ $work->category }}</p>
					<time class="post__date">{{ \Carbon\Carbon::instance($work->created_at)->toFormattedDateString() }}</time>
					<div class="hidden works-slug">{{ $work->slug }}</div>
					{!! Markdown::defaultTransform($work->desc) !!}
				</div>
				<div class="share">
					<a class="share-btn f-share" href="http://www.facebook.com/share.php?u={{ Request::url() }}&title={{ $work->title }}">
						<i class="fa fa-facebook"></i>
						<i class="fa fa-facebook"></i>
					</a>
					<a class="share-btn t-share" href="http://twitter.com/home?status={{ $work->title }}+{{ Request::url() }}">
						<i class="fa my-fa-twitter"></i>
						<i class="fa my-fa-twitter"></i>
					</a>
					<a class="share-btn lkdin-share" href="http://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}&title={{ $work->title }}&source=<?= $_SERVER['HTTP_HOST']; ?>">
						<i class="fa my-fa-linkedin"></i>
						<i class="fa my-fa-linkedin"></i>
					</a>
				</div>
			</div>
		</main>
	</article>
</div>


<section class="recent-works section">
	<h2 class="section__heading">Here's more works</h2>
	<div class="wrap">
		@foreach($moreWorks as $moreWork)
			<article class="row-3 work-preview">
				<div class="hidden works-slug">{{ $moreWork->slug }}</div>
				<div class="work-preview__thumb-container">
					<a href="/works/{{ $moreWork->slug }}" class="work-preview__link">
						<img src="{{ asset( $moreWork->thumbnail_path ) }}" class="work-preview__thumbnail" alt="" width="100%"/>
					</a>
				</div>
				<h3 class="work-preview__heading">
					<a href="/works/{{ $moreWork->slug }}" class="work-preview__link">{{ $moreWork->title }}</a>
				</h3>
				<hr>
				<time class="work-preview__date" datetime="{{ $moreWork->created_at }}">
					{{ \Carbon\Carbon::instance($moreWork->created_at)->toFormattedDateString() }}
				</time>
			</article>
		@endforeach
		<div class="btn-container">
			<a href="#" class="btn" id="viewmore-work">
				<span class="btn__text">View more design</span>
				<span class="btn__bg"></span>
			</a>
		</div>
	</div>
</section>
<section class="blog section">
	<h2 class="section__heading">And a few blog posts</h2>
	<div class="wrap">
		@foreach($morePosts as $morePost)
		<article class="row-3 blog__post-preview">
			<header>
				<h3 class="post__heading">
					<a href="/posts/{{ $morePost->slug }}" class="post__heading__link">{{ $morePost->title }}</a>
				</h3>
				<hr>
				<time class="post__date" datetime="{{ $morePost->created_at }}">
					{{ \Carbon\Carbon::instance($morePost->created_at)->toFormattedDateString() }}
				</time>
			</header>
			<div class="post__body">
				<p>
					{{ str_limit($morePost->body, 300, '...') }}
				</p>
			</div>
			<footer class="post__footer">
				<a href="/posts/{{ $morePost->slug }}" class="post__footer__link">Read this blog entry</a>
			</footer>
			<div class="hidden posts-slug">{{ $morePost->slug }}</div>
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
@stop

@section( "scripts" )
	<script type="text/javascript" src="{{ asset('/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/js/viewmore.js') }}"></script>
@stop
