<div class="p-5 bg-dark text-center text-light">
	<h1>
		My Chat App
	</h1>
</div>

<nav class="navbar navbar-expand-sm navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="#">chat app</a>
		<button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
			data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavId">
			<ul class="navbar-nav me-auto mt-2 mt-lg-0">
				<li class="nav-item">
					<a class="nav-link active" href="#" aria-current="page">Home
						<span class="visually-hidden">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('chat') }}">chat</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{ route('profile') }}">profile</a>
				</li>
				<li class="nav-item">
					<form action="{{ route('logout') }}" method="POST">
						@csrf
						<button class="btn nav-link">Logout</button>
					</form>
				</li>
			</ul>

			<form class="d-flex my-2 my-lg-0">
				<p>
					{{ Auth::user()->username }}
					<img class="rounded-circle" src="https://place-hold.it/30" alt="placeholder" srcset="">
				</p>
			</form>
		</div>
	</div>
</nav>