<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    <div id="app">
        
        @include('layouts.nav')
        @if(session()->has('flash'))
            <section>
                <div class="container has-text-centered">
                    <div class="column is-8 is-offset-2">
                        <div class="box">
                            <div class="notification is-link">
                                <button class="delete"></button>
                                {!! session('flash') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
        @yield('content')

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(document).ready(function () {
            window.wow.init();
        });
    </script>
</body>
</html>
