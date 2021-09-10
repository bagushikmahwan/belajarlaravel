<!DOCTYPE html>
<html>
    <head>
        <title>BBelajar laravel | @yield('title')</title>
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>

            <nav class="navbar navbar-dark bg-dark mb-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{url('')}}">Belajar laravel</a>
                </div>
            </nav>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h3>@yield('cardTitle')</h3>    
                    </div>
                    <div class="card-body">
                        <div class="card-text">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
