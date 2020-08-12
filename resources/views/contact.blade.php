@extends('layout')

@section('title','Contact')

@section('content')
    <h1>Contact</h1>
	  <form method="post" action="{{ route('contact') }}">
	  	@csrf
    	<input name="name" placeholder="nombre..." value="{{ old('name') }}"><br>
    	{{ $errors->first('name')}}<br>

    	<input type="text" name="email" placeholder="email..." value="{{ old('email') }}"><br>
    	{{ $errors->first('email')}}<br>

    	<input name="subject" placeholder="asunto..." value="{{ old('subject') }}"><br>
    	{{ $errors->first('subject')}}<br>

    	<textarea name="content" placeholder="mensaje..."> {{ old('content') }}</textarea><br>
    	{{ $errors->first('content')}}<br>

    	<button>enviar</button>
    </form>
@endsection
