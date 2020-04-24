<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Laravel Library</title>
</head>

<body>
    
    <div class="container">
        <div class="row my-5 justify-content-center">
            <h1><a href="/">Laravel Library</a></h1>
        </div>
        <div class="row justify-content-center">
            <ul>
                <li class="{{ Request::path() === 'books' ? 'current_page_item' : '' }}"><a href="/books" accesskey="2" title="">Books</a></li>
                <li class="{{ Request::path() === 'authors' ? 'current_page_item' : '' }}"><a href="/authors" accesskey="3" title="">Authors</a></li>
                <li class="{{ Request::path() === 'users' ? 'current_page_item' : '' }}"><a href="/users" accesskey="4" title="">All Members</a></li>
                <li class="{{ Request::path() === 'contact' ? 'current_page_item' : '' }}"><a href="#" accesskey="5" title="">Contact Us</a></li>
            </ul>
        </div>
        <div class="row my-5 justify-content-center">
            @yield ('content')
            @yield ('authors')
            @yield ('users')
        </div>
    </div>

</body>

</html>
