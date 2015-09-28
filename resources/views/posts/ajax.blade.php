@foreach($posts as $morePost)
<article class="row-3 blog__post-preview appear">
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
	<div class="hidden posts-slug">{{ $morePost->slug }}</div>
</article>
@endforeach
