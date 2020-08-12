<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet"  href="/css/app.css">
	<script src="/js/app.js" defer></script>

</head>
<body>
	<nav>
		 <ul>
		 	<li class="{{ setactive('Home') }}"><a href="{{ route('Home') }}">Home</a></li>
		 	<li class="{{ setactive('about') }}"><a href="{{ route('about') }}">About</a></li>
		 	<li class="{{ setactive('contact') }}"><a href="{{ route('contact') }}">Contac</a></li>
		 	<li class="{{ setactive('projects.*') }}"><a href="{{ route('projects.index') }}">portafolio</a></li>
		 	@guest
		 		<li><a href="{{ route('login') }}"> Login </a></li>
		 	@else
		 		<li>
		 			<a href="#" onclick="event.preventDefault();
                	document.getElementById('logout-form').submit();">Cerrar sesion</a>
            	</li>
		 	@endguest


		 </ul>
	 </nav>
	 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	 </form>

@include('partials.ss')
@yield('content')

</body>
</html>