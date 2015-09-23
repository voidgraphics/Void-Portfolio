@extends('layout')

@section('content')
	<img src="{{ asset( $post->header_path ) }}" alt="" />
	<h2>{{ $post->title }}</h2>
	<p>
		{{ \Carbon\Carbon::instance($post->created_at)->toFormattedDateString() }}
	</p>
	<p>
		{{ $post->body }}
	</p>
@stop
