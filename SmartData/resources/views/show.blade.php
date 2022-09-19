@extends('layout')

@section('title', $book->title)

@section('content')
    <a type="button" class="btn btn-secondary mt-3" href="{{ route('books.index') }}">Back to main page</a>
        <div class="card text-bg-success mt-3" style="max-width: 18rem;">
            <div class="card-header">Author: {{ $book->author }}</div>
            <div class="card-body">
                <h5 class="card-title">Title: {{ $book->title }}</h5>
                <p class="card-text">Created: {{ $book->created_at->format('h:i:s d/m/y') }}.<br>
                     Update: {{ $book->updated_at->format('h:i:s d/m/y') }}.</p>
            </div>
        </div>

@endsection
