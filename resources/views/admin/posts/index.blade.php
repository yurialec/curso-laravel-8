@extends('admin.layouts.app')

@section('title', 'Listagem dos posts')
    
@section('content')
    <a href="{{ route('posts.create') }}">Criar Novo Post</a>
    <hr style="width:30%;text-align:left;margin-left:0">
    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif
    <h1>Posts</h1>

    <form action="{{ route('posts.search') }}" method="post">
        @csrf
        <input type="text" name="search" placeholder="filtrar">
        <button type="submit">Filtrar</button>
    </form>

    @foreach ($posts as $post)
        <p>{{ $post->title }} [<a href="{{ route('posts.show', $post->id) }}">Detalhes</a>-<a
                href="{{ route('posts.edit', $post->id) }}">Editar</a>]</p>
    @endforeach

    <hr>
    @if (isset($filters))
        {{ $posts->appends($filters)->links() }}
    @else
        {{ $posts->links() }}
    @endif
@endsection
