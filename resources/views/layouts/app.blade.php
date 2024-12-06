<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<title>@yield('title')</title>
</head>
<body>
	<header>
		@include('layouts.header')
	</header>

	<div class="container">
		@yield('section')
	</div>

	<footer>
		<p>&copy; 2025 i wanna die</p>
	</footer>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>