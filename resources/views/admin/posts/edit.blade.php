@extends('admin.layouts.app')
@section('title', "Editar Post")
@section('content')
    <h1>Editar o Post {{ $post->title }}</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @include('admin.posts._partials.form')
    </form>
    <a href="{{ route('posts.index') }}">início</a>
@endsection
