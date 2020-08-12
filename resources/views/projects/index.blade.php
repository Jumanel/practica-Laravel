@extends('layout')

@section('content')
    <h1>Portafolio</h1>

    <ul>
    	@auth
    	<li><a href="{{ route('projects.create') }}">crear</a></li>
    	@endauth
    	@forelse($projects as $project)
	    	<li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>

	    @empty
	    	<li>no hay proyectos</li>
	    @endforelse
	    {{ $projects->links()}}
    </ul>
@endsection
@section('title','portafolio')