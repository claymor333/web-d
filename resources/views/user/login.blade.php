@extends('layouts.app')

@section('section')
	<div class="card p-3">
		@if (session('status'))
			<div class="alert alert-success">
				{{ session('status') }}
			</div>
		@endif
		<form method="POST" action="{{ route('loginAction') }}">
			@csrf
			<div class="mb-3">
				<label for="username">username</label>
				<input class="form form-control" type="text" name="username">
			</div>
			
			<div class="mb-3">
				<label for="password">password</label>
				<input class="form form-control" type="text" name="password">
			</div>
			
			<input type="submit" value="submit">
		</form>
	</div>
@endsection