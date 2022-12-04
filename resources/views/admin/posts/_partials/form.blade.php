@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $erro)
            <li>{{ $erro }}</li>
        @endforeach
    </ul>
@endif

@csrf
<input type="text" name="title" id="title" value="{{ $post->title ?? old('title') }}"><br><br>
<textarea name="content" id="content" cols="35" rows="5">{{ $post->content ?? old('content') }}</textarea><br><br>