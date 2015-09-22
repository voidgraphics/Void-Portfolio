@extends('layout')

@section('content')
	<form class="" action="/works" method="post">
		{!! csrf_field() !!}
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
			<label for="img">Image</label>
			<input type="file" name="img" value="">
		</div>
		<button type="submit" name="button">
			Submit
		</button>
	</form>
@stop
