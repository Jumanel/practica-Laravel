@csrf
        <label>
    		Titulo del proyecto <br>
    		<input type="text" name="title" value="{{ old('title',$project->title) }}">
    	</label>
    	<label>
    		<br>Url<br>
    		<input type="text" name="url" value="{{ old('url',$project->url) }}">
    	</label>
    	<label>
    		<br>Descripcion<br>
    		<textarea name="descripcion">{{ old('descripcion',$project->descripcion) }}</textarea>
    	</label>
    	<br>
        <button>{{ $btntext }}</button>