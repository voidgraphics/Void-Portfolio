@extends('layout')

@section('content')
	<img src="{{ asset( $work->img_path ) }}" alt="" />
	<h2>{{ $work->title }}</h2>
	<h3>{{ $work->category }}</h3>
	<p>
		{{ $work->desc }}
	</p>
@stop
