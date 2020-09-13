<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('components.head')
</head>
<body>
<div id="app">
    <div class="min-h-screen bg-white">
        @include('components.header')

        <div class="py-10">
            @yield('content-header')
            <main>
                <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                    <div class="px-4 pt-8 pb-8 sm:px-0">
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>

    </div>

    @include('components.footer')

</div>
</body>
</html>
