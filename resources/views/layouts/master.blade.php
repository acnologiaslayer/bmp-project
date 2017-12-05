<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BD Missing People</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/fonts/fontawesome-webfont.woff">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	.is-mancante{
		background-color: #1e2330;
		color: #fff;
	}
	.is-mancante .title{
		color: #fff;
	}

	.navbar-item, .navbar-link{
		box-sizing: border-box;
		color: #fff;
		text-transform: uppercase;
	}

	a.navbar-link:hover, a.navbar-link.is-active, div.navbar-item.has-dropdown.is-hoverable:hover{
		background-color: transparent;
		border: 1px solid #fff;
		color: #fff;
	} 

	.navbar-link::after{
		border-color: #fff;
	}

	.navbar-item.has-dropdown.is-active .navbar-link, .navbar-item.has-dropdown:hover .navbar-link{
		background-color: transparent;
	}
	 a.navbar-item:hover, a.navbar-item.is-active, .navbar-dropdown a.navbar-item:hover, .navbar-dropdown a.navbar-item.is-active{
		background-color: transparent;
		border: 1px solid #fff;
		color: #fff;
	}

	.navbar-dropdown {
		background-color: #1e2330;
	}

	.navbar{
		margin-top: 2em;
	}

	.navbar-menu {
		background-color: transparent;
	}
</style>
</head>
<body>
	<section class="hero is-mancante is-medium">
		<!-- Hero head: will stick at the top -->
		<div class="hero-head">
			<nav class="navbar">
				<div class="container">
					<div class="navbar-brand">
						<a class="navbar-item">
						</a>
						<span class="navbar-burger burger x1" data-target="navbarMenuHeroA" onclick="toggle()">
							<span></span>
							<span></span>
							<span></span>
						</span>
					</div>
					<div id="navbarMenuHeroA" class="navbar-menu x1">
						<div class="navbar-end">
							<a class="navbar-item {{Request::is('/') ? 'is-active' : ''}}" href="/">
								Home
							</a>
							<a class="navbar-item {{Request::is('report') ? 'is-active' : ''}}" href="/report">
								Report Missing
							</a>
							<div class="navbar-item has-dropdown is-hoverable">
								<a class="navbar-link {{(Request::is('sighting') || Request::is('missing')) ? 'is-active' : ''}}">
									Help to Find People
								</a>
								<div class="navbar-dropdown">
									<a class="navbar-item {{Request::is('sighting') ? 'is-active' : ''}}" href="/sighting">
										Report A Sighting
									</a>
									<a class="navbar-item {{Request::is('missing*') ? 'is-active' : ''}}" href="/missing">
										Missing People
									</a>
								</div>
							</div>
							<a class="navbar-item {{Request::is('about') ? 'is-active' : ''}}" href="/about">
								About Us
							</a>
						</div>
					</div>
				</div>
			</nav>
		</div>

		<!-- Hero content: will be in the middle -->
		<div class="hero-body">
			<div class="container has-text-centered">
				@yield('header-text')
			</div>
		</div>
	</section>
	@yield('content')
	<script>
		function toggle(){
			document.getElementsByClassName('x1')[0].classList.toggle('is-active')
			document.getElementsByClassName('x1')[1].classList.toggle('is-active')
		}
	</script>
</body>
</html>