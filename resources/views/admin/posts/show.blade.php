<h1>Detalhes do post {{ $post->title }}</h1>
<ul>
    <li><strong>Título: </strong> {{ $post->title }} </li>
    <li><strong>Conteúdo: </strong>{{ $post->content }} </li>
</ul>

<form action="{{ route('posts.destroy', $post->id) }}" method="POST">
    @csrf
    <input type="hidden" name="_method" value="DELETE">
    <button type="submit">Deletar o post: {{ $post->title }}</button>
</form>
<a href="{{ route('posts.index') }}">início</a>