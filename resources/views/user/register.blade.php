@extends('layouts.app')

@section('section')

<div class="card p-3">

	<form action="">

		<div class="mb-3">
			<label for="username">
				username
			</label>
			<input type="text" name="username" class="form form-control">
		</div>

		<div class="mb-3">
			<label for="password">
				password
			</label>
			<input type="password" name="password" class="form form-control">
		</div>

		<div class="mb-3">
			<label for="password-confirm">
				password confirm
			</label>
			<input type="password_confirmation" name="password" class="form form-control">
		</div>

		<div class="mb3">
			<button class="btn btn-primary" type="submit">submit</button>
			<button class="btn btn-danger" type="reset">reset</button>
		</div>
	</form>
</div>
@endsection