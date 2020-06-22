<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<style>
		.active a {
			color:blue;
			text-decoration:none;
		}
	</style>
</head>
<body>
	<nav>
		 <ul>
		 	<li class="{{ setactive('casa') }}"><a href="/">Home</a></li>
		 	<li class="{{ setactive('about') }}"><a href="/about">About</a></li>
		 	<li class="{{ setactive('contact') }}"><a href="/contact">Contac</a></li>
		 	<li class="{{ setactive('portfolio') }}"><a href="/portfolio">Portfolio</a></li>
		 </ul>
	 </nav>
	 @yield('content')
</body>
</html>