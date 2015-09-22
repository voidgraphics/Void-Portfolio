@extends( 'layout' )

@section( 'content' )
	<form class="" action="/auth/login" method="post">
		{!! csrf_field() !!}
		<div class="">
			<label for="email">E-mail</label>
			<input type="email" name="email" id="email" value="">
		</div>
		<div class="">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" value="">
		</div>
		<div class="">
			<button type="submit" name="button">
				Login
			</button>
		</div>
	</form>
@stop
