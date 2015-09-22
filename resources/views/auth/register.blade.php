@extends( 'layout' )

@section( 'content' )
	<form class="" action="/auth/register" method="post">
		{!! csrf_field() !!}
		<div class="">
			<label for="username">Username</label>
			<input type="text" name="username" id="username" value="">
		</div>
		<div class="">
			<label for="email">E-mail</label>
			<input type="text" name="email" id="email" value="">
		</div>
		<div class="">
			<label for="password">Password</label>
			<input type="password" name="password" id="password" value="">
		</div>
		<div class="">
			<label for="password_confirmation">Confirm password</label>
			<input type="password" name="password_confirmation" id="password_confirmation" value="">
		</div>
		<button type="submit" name="button">
			Register
		</button>
	</form>
@stop
