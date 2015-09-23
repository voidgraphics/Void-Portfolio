@extends('layout')

@section('content')
	<h2>New blog post</h2>
	@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form class="" action="/posts" method="post" enctype="multipart/form-data">
		{!! csrf_field() !!}
		<div class="">
			<label for="slug">Slug</label>
			<input type="text" name="slug" value="">
		</div>
		<div class="">
			<label for="title">Title</label>
			<input type="text" name="title" value="">
		</div>
		<div class="">
			<label for="body">Body</label>
			<textarea name="body" rows="8" cols="40"></textarea>
		</div>
		<div class="">
			<label for="header-img">Header image</label>
			<input type="file" name="header-img" value="">
		</div>
		<button type="submit" name="button">
			Submit
		</button>
	</form>
@stop
