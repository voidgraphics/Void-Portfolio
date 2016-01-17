@foreach($works as $moreWork)
	<article class="row-3 work-preview appear">
		<div class="hidden works-slug">{{ $moreWork->slug }}</div>
		<div class="work-preview__thumb-container">
			<a href="/works/{{ $moreWork->slug }}" class="work-preview__link">
				<img src="{{ asset( $moreWork->thumbnail_path ) }}" class="work-preview__thumbnail" alt="" width="100%"/>
			</a>
		</div>
		<h3 class="work-preview__heading">
			<a href="/works/{{ $moreWork->slug }}" class="work-preview__link">{{ $moreWork->title }}</a>
		</h3>
		<time class="work-preview__date" datetime="{{ $moreWork->created_at }}">
			{{ \Carbon\Carbon::instance($moreWork->created_at)->toFormattedDateString() }}
		</time>
	</article>
@endforeach
