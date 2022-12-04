<h1>Editar o post: <u><i>{{ $post->title }}</i></u></h1>
@if($errors->any())
    <ul>
        @foreach($errors->all() as $erro)
            <li>{{$erro}}</li>
        @endforeach
    </ul>
@endif
<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" id="title" value="{{ $post->title }}"><br><br>
    <textarea name="content" id="content" cols="35" rows="5">{{ $post->content }}</textarea><br><br>
    <button type="submit">Editar</button>
</form>