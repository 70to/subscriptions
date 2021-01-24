<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'MySubsc') }} | サブスク管理サービス</title>
<meta name="description" content="{{ config('app.name', 'MySubsc') }}はサブスクを管理して把握することで不必要なサブスクを継続しないようにするためのサイトです。" />

<meta name="twitter:card" content="summary_large_image" />
<meta property="og:url" content="{{ config('app.url') }}" />
<meta property="og:title" content="{{ config('app.name', 'MySubsc') }}" />
<meta property="og:description" content="{{ config('app.name', 'MySubsc') }}はサブスクを管理して把握することで不必要なサブスクを継続しないようにするためのサイトです。" />
<meta property="og:image" content="@yield('og:image' ?? asset('imgs/ogp.jpg'))" />

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-178669375-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-178669375-1');
</script>

<link rel="apple-touch-icon" sizes="180x180" href="{{asset('imgs/apple-touch-icon.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('imgs/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('imgs/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('imgs/site.webmanifest')}}">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
