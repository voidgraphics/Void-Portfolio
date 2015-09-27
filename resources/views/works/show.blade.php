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
					<h2 class="post__title">{{ $work->title }}</h2>
					<p class="post__category">{{ $work->category }}</p>
					<time class="post__date">{{ \Carbon\Carbon::instance($work->created_at)->toFormattedDateString() }}</time>
					<p class="post__body">
						{!! Markdown::defaultTransform($work->desc) !!}
					</p>
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
				<div class="work-preview__thumb-container">
					<a href="/works/{{ $moreWork->slug }}" class="work-preview__link">
						<img src="{{ asset( $moreWork->thumbnail_path ) }}" class="work-preview__thumbnail" alt="" width="100%"/>
					</a>
				</div>
				<h3 class="work-preview__heading">
					<a href="/works/{{ $moreWork->slug }}" class="work-preview__link">{{ $moreWork->title }}</a>
				</h3>
				<hr>
				<time class="work-preview__date">
					{{ \Carbon\Carbon::instance($moreWork->created_at)->toFormattedDateString() }}
				</time>
			</article>
		@endforeach
		<a href="#" class="btn">
			<span class="btn__text">View more design</span>
			<span class="btn__bg"></span>
		</a>
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
				<time class="post__date">
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
		</article>
		@endforeach
		<a href="#" class="btn">
			<span class="btn__text">View more blog posts</span>
			<span class="btn__bg"></span>
		</a>
	</div>
</section>
@stop
