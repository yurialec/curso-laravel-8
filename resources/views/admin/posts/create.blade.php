@extends('admin.layouts.app')
@section('title', 'Criar Novo Post')
@section('content')
    <h1>Criar Novo Post</h1>
    <form action="{{ route('posts.store') }}" method="post">
        @include('admin.posts._partials.form')
    </form>
    <a href="{{ route('posts.index') }}">início</a>
@endsection
