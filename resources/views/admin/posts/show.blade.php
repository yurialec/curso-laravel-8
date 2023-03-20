@extends('admin.layouts.app')
@section('title', 'Detalhes do Post')
@section('content')
    <h1>Detalhes do post {{ $post->title }}</h1>
    <ul>
        <li><strong>Título: </strong> {{ $post->title }} </li>
        <li><strong>Conteúdo: </strong>{{ $post->content }} </li>
        <li><img src="{{ url("storage/{$post->image}") }}" alt="{{ $post->title }}" width="350px"><br></li>
    </ul>

    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar o post: {{ $post->title }}</button>
    </form>
    <a href="{{ route('posts.index') }}">início</a>
@endsection
