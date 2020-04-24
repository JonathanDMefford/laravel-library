@extends ('frontpage')

@section ('content')

    <div id="wrapper">
        <div id="page" class="container">
            @foreach ($books as $book)
            <div id="content">
                <div class="title">
                <h2>
                    <a href="{{ $book->path() }}">
                        {{ $book->title }}
                    </a>
                </h2>
                {{ $book->description }}
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection