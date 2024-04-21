<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

	<div class="container">
		<a class="navbar-brand" href="/"><img  style="height: 1.5em !important" src="images/logo.png" alt=""></a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarsFurni">
			<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
				<li class="nav-item @if(request()->is('/')) active @endif">
					<a class="nav-link" href="/">Home</a>
				</li>
				<li class="nav-item @if(request()->is('shop')) active @endif"><a class="nav-link" href="shop">Shop</a></li>
				<li class="nav-item @if(request()->is('services')) active @endif"><a class="nav-link" href="services">Services</a></li>
				<li class="nav-item @if(request()->is('contact')) active @endif"><a class="nav-link" href="contact">Contact us</a></li>
				@if(session()->get('user_id'))
				<li class="nav-item"><a class="nav-link" href="logout">LogOut</a></li>
				@else
				<li class="nav-item"><a class="nav-link" href="login">LogIn</a></li>

				@endif
			</ul>

			<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
				@if(session()->get('user_id'))
					<li><a class="nav-link" href=""><img src="images/user.svg">  {{$user->name}}</a></li>
					<li style="position: relative"><a class="nav-link" href="cart"><span id="countres">{{$countres}}</span><img src="images/cart.svg"></a></li>

				@else
					<li><a class="nav-link" href="login"><img src="images/user.svg"></a></li>
				@endif

			</ul>
		</div>
	</div>
		
	<style>
		#countres{
			position: absolute;
			top: 0;
			right: -1em;
			background-color: rgb(202, 202, 202);
			color: rgb(0, 0, 0);	
			display: flex	;
			justify-content: center	;
			align-items: center;
			font-weight: bold;
			width: 2em;
			height: 2em;
			border-radius: 50%;
		}

	</style>
</nav>