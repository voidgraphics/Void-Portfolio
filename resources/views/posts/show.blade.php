@extends('layout')

@section( "page-title" )
Blog: {{ $post->title }} - Void Graphics
@stop

@section( "css" )
<link rel="stylesheet" href="{{ asset( '/css/blog-post.css' ) }}">
@stop

@section('content')
<h1 class="title--hidden">Blog: {{ $post->title }}</h1>
<article>
	<header class="hero">
		<div class="hero__content">
			<h2 class="hero__title">{{ $post->title }}</h2>
			<hr>
			<p class="hero__date">{{ \Carbon\Carbon::instance($post->created_at)->toFormattedDateString() }}</p>
		</div>
		<img src="{{ asset( $post->header_path ) }}" class="hero__bg" alt="" />
	</header>
	<main class="post">
		<div class="wrap">
			<div class="post__content">
				<p class="post__paragraph">
					{{ $post->body }}
				</p>
			</div><div class="viewmore">
				<section>
					<h3 class="viewmore__heading">More blog posts</h3>
					<ul class="viewmore__posts sidebar">
						@foreach($morePosts as $morePost)
							<li class="sidebar__item">
								<article class="blog__post-preview">
									<header>
										<h3 class="post__heading">
											<a href="/posts/{{ $morePost->slug }}" class="post__heading__link">{{ $morePost->title }}</a>
										</h3>
										<hr>
										<p class="post__date">
											{{ \Carbon\Carbon::instance($morePost->created_at)->toFormattedDateString() }}
										</p>
									</header>
									<main class="post__body">
										{{ str_limit($morePost->body, 100, '...') }}
									</main>
									<footer class="post__footer">
										<a href="/posts/{{ $morePost->slug }}" class="post__footer__link">Read this blog entry</a>
									</footer>
								</article>
							</li>
						@endforeach
					</ul>
				</section>
				<section>
					<h3 class="viewmore__heading">More works</h3>
					<ul class="viewmore__works">
						@foreach($moreWorks as $moreWork)
							<li>
								<img src="{{ asset($moreWork->thumb_path) }}" alt="" />
								{{ $moreWork->title }}
							</li>
						@endforeach
					</ul>
				</section>
			</div>
		</div>
	</main>
</article>
@stop
