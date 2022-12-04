@extends('admin.layouts.app')

@section('title', 'Criar novo post')
    
@section('content')
    <h1>Novo Post</h1>

    <form action="{{ route('posts.store') }}" method="post">
        @include('admin.posts._partials.form')
        <button type="submit">Cadastrar</button>
    </form>
@endsection
