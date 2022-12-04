@extends('admin.layouts.app')

@section('title', 'Detalhes do post')

@section('content')
    <h1>Detalhes do post: <u><i>{{ $post->title }}</i></u></h1>
    <ul>
        <li>{{ $post->title }}</li>
        <li>{{ $post->content }}</li>
    </ul>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Deletar o post: {{ $post->title }}</button>
    </form>
@endsection
