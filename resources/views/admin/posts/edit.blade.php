<h1>Editar o post: <u><i>{{ $post->title }}</i></u></h1>

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @method('put')
    @include('admin.posts._partials.form')
    <button type="submit">Editar</button>
</form>