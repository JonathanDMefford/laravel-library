@extends ('frontpage')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            @foreach ($books as $book)
            <div id="content">
                <div class="row mb-5">
                <h3>
                    <a href="{{ $book->path() }}">
                        {{ $book->title }}
                    </a>
                </h3>
                {{ $book->description }}
                <br>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection