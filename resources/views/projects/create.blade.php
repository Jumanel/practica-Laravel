@extends('layout')

@section('title','Crear Proyecto')

@section('content')
    <h1>Nuevo Proyecto</h1>

    	@include('partials.ss')

        @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store') }}">

        @include('projects._form',[ 'btntext' => 'guardar' ])

    </form>
@endsection
