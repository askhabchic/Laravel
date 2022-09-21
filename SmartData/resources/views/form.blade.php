@extends('layout')

@section('title', isset($book) ? 'Update '.$book->title : 'Create book')

@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route('books.index') }}">Back to main page</a>
    <form method="POST"
          @if(isset($book))
          action="{{ route('books.update', $book) }}"
          @else
          action="{{ route('books.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($book)
            @method('PUT')
        @endisset
        <div class="row ">
            <div class="col">
                <input name="title" value="{{ isset($book) ? $book->title : null }}"
                       type="text" class="form-control mt-3" placeholder="Title" aria-label="title">
                <input name="author" value="{{ isset($book) ? $book->author : null }}"
                       type="text" class="form-control mt-3" placeholder="Author" aria-label="author">
                <button type="submit" class="btn btn-success mt-3">Confirm</button>
            </div>
        </div>
    </form>
@endsection
