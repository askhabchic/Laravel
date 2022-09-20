@extends('layout')

@section('title', isset($author) ? 'Update '.$author->name : 'Create author')

@section('content')
    <a type="button" class="btn btn-secondary" href="{{ route('authors.index') }}">Back to main page</a>
    <form method="POST"
          @if(isset($author))
          action="{{ route('authors.update', $author) }}"
          @else
          action="{{ route('authors.store') }}"
          @endif
          class="mt-3">
        @csrf
        @isset($author)
            @method('PUT')
        @endisset
        <div class="row">
            <div class="col">
                <input name="name" value="{{ isset($author) ? $author->name : null }}"
                       type="text" class="form-control mt-3" placeholder="Name" aria-label="name">
                <button type="submit" class="btn btn-success mt-3">Confirm</button>
            </div>
        </div>
    </form>
@endsection
