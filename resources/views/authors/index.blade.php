@extends ('frontpage')

@section ('authors')

    <div id="wrapper">
        <div id="page" class="container">
            @foreach ($authors as $author)
            <div id="content">
                <div class="title">
                <h2>
                    <a href="{{ $author->path() }}">
                        {{ $author->name }}
                    </a>
                </h2>
            </div>
            @endforeach
        </div>
    </div>

@endsection

