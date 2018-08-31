<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Contacts App</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">
    </head>
    <body>        
        <div id="app" class="site-content">
            <div>
                @yield('content')
            </div>
        </div>
        <footer class="bg-dark text-white margin-top-2">
            <div class="text-center">
                <p>Copyright User Listing App</p>
            </div>
        </footer>
    <!--Scripts-->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>    
    </body>
</html>
