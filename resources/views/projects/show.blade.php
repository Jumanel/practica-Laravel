@extends('layout')
@section('title', $project->title)

@section('content')
 <h2>{{ $project->title }}</h2>
 @auth
   	<a href="{{ route('projects.edit', $project) }}">editar</a>
   	<form method="post" action="{{ route('projects.destroy', $project) }}">
   	@csrf @method('DELETE')
   	<button>Eliminar</button>
 @endauth

   	</form>
   <p>{{ $project->descripcion }}</p>
   <p>{{ $project->created_at->diffforhumans() }}</p>
@endsection
