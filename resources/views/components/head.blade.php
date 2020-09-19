<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'MySubsc') }} | サブスク管理サービス</title>
<meta name="description" content="{{ config('app.name', 'MySubsc') }}はサブスクを管理して把握することで不必要なサブスクを継続しないようにするためのサイトです。" />


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<link rel="shortcut icon" href="{{asset('imgs/favicon.svg')}}">

<!-- Fonts -->
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
