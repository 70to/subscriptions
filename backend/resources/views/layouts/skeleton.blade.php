<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('components.head')
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
<div id="app">
    @yield('content')
</div>
</body>
</html>
