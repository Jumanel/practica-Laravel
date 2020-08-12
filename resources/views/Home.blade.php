@extends('layout')

@section('content')
    <h1>Hola</h1>
    @auth
    {{ auth()->user()->name }}
    @endauth
@endsection

@section('title','casa')
