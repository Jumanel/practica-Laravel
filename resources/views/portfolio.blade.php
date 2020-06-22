@extends('layout')

@section('content')
    <h1>Portfolio</h1>
    <ul>
    	@forelse($portafolio as $Portfolioitem)
	    	<li>{{ $Portfolioitem ['title'] }}</li>
	    @empty
	    	<li>no hay proyectos</li>
	    @endforelse
    </ul>
@endsection
@section('title','Portfolio')