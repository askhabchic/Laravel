@extends('layout')

@section('title', isset($book) ? 'Update ' . $book->title : 'Create book')

@section('content')
    <form method="post" action="{{ route('books.store')}}">
        @csrf
        <div class="row">
            <div class="col">
                <input name="title" type="text" class="form-control" placeholder="Title" aria-label="title">
                <input name="author" type="text" class="form-control" placeholder="Author" aria-label="author">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
@endsection
