@extends('layout')

@section('title','Contact')

@section('content')
    <h1>Contact</h1>
    <form method="post" action="{{ route('contact') }}">
    	<input name="name" placeholder="nombre..."><br>
    	<input type="email" name="email" placeholder="email..."><br>
    	<input name="subject" placeholder="asunto..."><br>
    	<textarea name="content" placeholder="mensaje..."></textarea><br>
    	<button>enviar</button>
    </form>
@endsection
