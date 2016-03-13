<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body id="@yield('page-id', 'main')">

<div class="container">
    <h1>Hello</h1>
    @yield('content')
    @include('partials.footer', ['txt' => 'testfooter'])

</div>

</body>
</html>