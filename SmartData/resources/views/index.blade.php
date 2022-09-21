@extends('layout')

@section('title', 'Books')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $book)
        <tr>
            <th scope="row">{{$book->id}}</th>
            <th>
                <a href="{{ route('books.show', $book) }}">{{$book->title}}</a>
            </td>
            <td>
                <a href="{{ route('books.show', $book) }}">{{ $book->author->name ?? ''}}</a>
            </td>
            <td>
                <form method="POST" action="{{ route('books.destroy', $book) }}">
                    <a type="button" class="btn btn-success" href="{{ route('books.edit', $book) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    <tr>
        <td>
            <a class="btn btn-primary" role="button" href="{{route('books.create')}}">Add new book</a>
        </td>
        <td>
            <a type="button" class="btn btn-secondary" href="/">Back to main</a>
        </td>
    </tr>

@endsection
