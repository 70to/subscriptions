<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="twitter:card" content="summary_large_image"/> <!--①-->
    <meta name="twitter:site" content="@naotlog"/> <!--②-->
    {{--    <meta property="og:url" content="https://saruwakakun.com/best" /> <!--③-->--}}
    <meta property="og:title" content="記事のタイトル"/> <!--④-->
    <meta property="og:description" content="記事の要約（ディスクリプション）">
    <meta property="og:image" content="https://saruwakakun.com/wp-content/uploads/2017/06/dadada-min.png"/>
    {{--    <meta property="og:image" content="{{asset('images/image.png')}}" />--}}

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
