<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ css/app.css }}" rel="stylesheet">
</head>
<body>
    @include('inc.header')
        @if(Request::is('home'))
            @include('inc.hero')
        @endif
        
    <div class="container mt-5">
        @include('inc.errors')
        <div class="row">
            <div class="col-9">
                @yield('content')
            </div>
            <div class="col-3">
                @include('inc.aside')
            </div>
        </div>
    </div>


    @include('inc.footer')
</body>
</html>
