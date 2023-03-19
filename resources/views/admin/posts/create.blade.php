<h1>Cadastrar Post</h1>
<form action="{{ route('posts.store') }}" method="post">
    @include('admin.posts._partials.form')
</form>
<a href="{{ route('posts.index') }}">início</a>