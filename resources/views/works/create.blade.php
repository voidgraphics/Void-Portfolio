@extends('layout')

@section('content')
	<h2>Create new project</h2>
	@if (count($errors) > 0)
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif
	<form class="" action="/works" method="post" enctype="multipart/form-data">
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
			<label for="category">Category</label>
			<input type="text" name="category" value="">
		</div>
		<div class="">
			<label for="desc">Description</label>
			<textarea name="desc" rows="8" cols="40"></textarea>
		</div>
		<div class="">
			<label for="thumb">Thumbnail</label>
			<input type="file" name="thumb" value="">
		</div>
		<div class="">
			<label for="img">Image</label>
			<input type="file" name="img" value="">
		</div>
		<button type="submit" name="button">
			Submit
		</button>
	</form>
@stop
