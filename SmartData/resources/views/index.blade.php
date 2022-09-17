@extends('layout')

@section('title', 'Books')

@section('content')
    <a class="btn btn-primary" role="button" href="{{route('books.create')}}">Add new book</a>

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
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>
                <a type="button" class="btn btn-secondary" href="{{ route('books.edit', $book) }}">Edit</a>
            </td>
        </tr>
        @endforeach

        </tbody>
    </table>
@endsection
