@extends('layout')

@section('title', 'Main')

@section('content')
    <div class="card w-100">
        <div class="card-body">
            <h4 class="card-title">Books</h4>
            <p class="card-text">List of books</p>
            <a class="btn btn-outline-success me-2 text-bg-dark" type="button" href="/books">Go to 'Books'</a>
        </div>
    </div>

    <div class="card w-100">
        <div class="card-body">
            <h4 class="card-title">Authors</h4>
            <p class="card-text">List of authors</p>
            <a class="btn btn-outline-success me-2 text-bg-dark" type="button" href="/authors">Go to 'Authors'</a>
        </div>
    </div>
    {{--    <div class="offcanvas offcanvas-start show text-bg-dark" id="offcanvasDark" aria-labelledby="offcanvasDarkLabel">--}}
    {{--        <div class="offcanvas-header">--}}
    {{--            <h5 class="offcanvas-title" id="offcanvasDarkLabel">Main page</h5>--}}
    {{--            <nav class="navbar bg-dark">--}}
    {{--                <form class="container-fluid justify-content-start text-bg-dark">--}}
    {{--                    <a class="btn btn-outline-success me-2 text-bg-dark" type="button" href="/books">Books</a>--}}
    {{--                    <a class="btn btn-outline-success me-2 text-bg-dark" type="button" href="/authors">Authors</a>--}}
    {{--                </form>--}}
    {{--            </nav>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
