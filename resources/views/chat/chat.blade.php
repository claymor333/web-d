@extends('layouts.app')
@section('section')
<div class="p3">
	<h1>CHAT</h1>
	@if (session('status'))
	<div class="alert alert-success">
		{{ session('status') }}
	</div>
@endif
</div>
@endsection