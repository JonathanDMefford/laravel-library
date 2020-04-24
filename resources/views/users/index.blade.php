@extends ('frontpage')

@section ('users')

    <div id="wrapper">
        <div id="page" class="container">
            @foreach ($users as $user)
            <div id="content">
                <div class="title">
                <h4>
                    {{ $user->name }}
                </h4>
                <p>
                    {{ $user->email}}
                </p>
                <br>
            </div>
            @endforeach
        </div>
    </div>

@endsection