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
                <a href="{{ route('books.show', $book) }}">{{$book->author}}</a>
            </td>
            <td>
                <a type="button" class="btn btn-success" href="{{ route('books.edit', $book) }}">Edit</a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
    <a class="btn btn-primary" role="button" href="{{route('books.create')}}">Add new book</a>
@endsection
