@extends('admin.app')

@section('content')

<h3>Edit Article</h3>

<form action="/admin/articles/update/{{ $article->id }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" value="{{ $article->title }}" placeholder="masukkan Judul..">
    </div>
    <div class="form-group">
        <textarea name="body" class="form-control" rows="10" placeholder="masukkan isi artikel">{{ $article->body }}</textarea>
    </div>
    <div class="form-group">
        <input type="date" name="date" class="form-control" value="{{ $article->date }}">
    </div>
    <div class="form-group">
        <button class="form-button">Submit</button>
    </div>
</form>

@endsection
