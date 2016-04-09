<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title', 'Главная страница моего сайта')</title>
        <link href="/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="/css/style.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
        @yield('css.header')
    </head>
    <body>
    <div class="container">
        <div class="header clearfix">
            @include('partials.nav')
        </div>

        <div class="row marketing">
            @include('partials.flash')
            {{ dd(Auth::check()) }}
            @yield('content')
        </div>

        <footer class="footer">
            <p>&copy; 2015 Company, Inc.</p>
        </footer>

    </div>
    {{-- Можно подключить и так без функции asset --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    @yield('js.footer')
    </body>
</html>
