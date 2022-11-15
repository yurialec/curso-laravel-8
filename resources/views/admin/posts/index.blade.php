<a href="{{ route('posts.create') }}">Criar Novo Post</a>
<hr style="width:30%;text-align:left;margin-left:0">
<h1>Posts</h1>

@foreach($posts as $post)
    <p>{{$post->title}}</p>
@endforeach