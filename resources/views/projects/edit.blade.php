@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <h1>Editar Proyecto</h1>

        @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
    	@method('patch')

        @include('projects._form',[ 'btntext' => 'editar' ])

    </form>
@endsection
