@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="text" name="title" id="title" placeholder="Título" value="{{ $post->title ?? old('title') }}">
<textarea name="content" id="content" cols="30" placeholder="Conteúdo" rows="4">{{ $post->content ?? old('content') }}</textarea>
<button type="submit">Enviar</button>
