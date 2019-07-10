<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @yield('head')
</head>
<body>
    <div id="app">
        @include('commons.navbar')
        @yield('content')
    </div>

    @yield('footer')
</body>
</html>

