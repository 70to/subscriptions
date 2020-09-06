@extends('layouts.auth')

@section('content')
    <div class="bg-gray-50">
        <div class="relative overflow-hidden">
            <div class="block absolute inset-y-0 h-full w-full">
                <div class="relative h-full">
                    <svg
                        class="absolute right-full transform translate-y-1/3 translate-x-1/4 md:translate-y-1/2 sm:translate-x-1/2 lg:translate-x-full"
                        width="404" height="784" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="e229dbec-10e9-49ee-8ec3-0286ca089edf" x="0" y="0" width="20" height="20"
                                     patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#ad9a0a02-b58e-4a1d-8c36-1b649889af63)"/>
                    </svg>
                    <svg
                        class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 sm:-translate-x-1/2 md:-translate-y-1/2 lg:-translate-x-3/4"
                        width="404" height="784" fill="none" viewBox="0 0 404 784">
                        <defs>
                            <pattern id="d2a68204-c383-44b1-b99f-42ccff4e5365" x="0" y="0" width="20" height="20"
                                     patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"/>
                            </pattern>
                        </defs>
                        <rect width="404" height="784" fill="url(#478e97d6-90df-4a89-8d63-30fdbb3c7e57)"/>
                    </svg>
                </div>
            </div>

            <div class="relative pt-6 pb-12 lg:pb-20">
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
                    <nav class="relative flex items-center justify-between sm:h-10 md:justify-center">
                        <div class="flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
                            <div class="flex items-center justify-between w-full md:w-auto">
                                <a href="{{url('/')}}" class="flex items-center">
                                    <div class="mr-1.5">
                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                             class="calendar text-indigo-600 w-8 h-8">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </a>

                                <div class="-mr-2 flex items-center md:hidden">
                                    <a href="{{route('login')}}"
                                       class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-700 transition duration-150 ease-in-out">
                                        ログイン
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="hidden md:absolute md:flex md:items-center md:justify-end md:inset-y-0 md:right-0">
            <span class="inline-flex rounded-md shadow">
              <a href="{{route('login')}}"
                 class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:border-indigo-300 focus:shadow-outline-indigo active:bg-gray-50 active:text-indigo-700 transition duration-150 ease-in-out">
                ログイン
              </a>
            </span>
                        </div>
                    </nav>
                </div>

{{--                <!----}}
{{--                  Mobile menu, show/hide based on menu open state.--}}

{{--                  Entering: "duration-150 ease-out"--}}
{{--                    From: "opacity-0 scale-95"--}}
{{--                    To: "opacity-100 scale-100"--}}
{{--                  Leaving: "duration-100 ease-in"--}}
{{--                    From: "opacity-100 scale-100"--}}
{{--                    To: "opacity-0 scale-95"--}}
{{--                -->--}}
{{--                <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">--}}
{{--                    <div class="rounded-lg shadow-md">--}}
{{--                        <div class="rounded-lg bg-white shadow-xs overflow-hidden" role="menu"--}}
{{--                             aria-orientation="vertical" aria-labelledby="main-menu">--}}
{{--                            <div class="px-5 pt-4 flex items-center justify-between">--}}
{{--                                <div>--}}
{{--                                    <img class="h-8 w-auto"--}}
{{--                                         src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="-mr-2">--}}
{{--                                    <button type="button"--}}
{{--                                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"--}}
{{--                                            aria-label="Close menu">--}}
{{--                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                                  d="M6 18L18 6M6 6l12 12"/>--}}
{{--                                        </svg>--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <a href="{{route('login')}}"--}}
{{--                                   class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100 hover:text-indigo-700 focus:outline-none focus:bg-gray-100 focus:text-indigo-700 transition duration-150 ease-in-out"--}}
{{--                                   role="menuitem">--}}
{{--                                    ログイン--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:px-6 md:mt-16 lg:mt-20">
                    <div class="text-center">
                        <h2 class="mt-1 text-4xl tracking-tight font-extrabold text-gray-900 sm:leading-tight sm:text-5xl">
                            サブスクを管理して
                            <br>
                            <span class="text-indigo-600">無駄な支出を減らそう</span>
                        </h2>
{{--                        <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">--}}
{{--                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.--}}
{{--                            Elit sunt amet fugiat veniam occaecat fugiat aliqua.--}}
{{--                        </p>--}}
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="absolute inset-0 flex flex-col">
                    <div class="flex-1"></div>
                    <div class="flex-1 w-full bg-gray-800"></div>
                </div>
                <div class="max-w-screen-xl mx-auto px-4 sm:px-6">
                    <img class="relative rounded-lg shadow-lg mx-auto"
                         src="{{asset('imgs/screenshot_2.png')}}"
                         alt="App screenshot">
                </div>
            </div>
        </div>
    </div>
    <div class="py-12 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Roadmap</p>
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    ロードマップ
                </h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">

                </p>
            </div>

            <div class="py-12 bg-white">
                <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-screen-xl lg:px-8">
                    <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                        <div>
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"/>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">通知</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    更新日が近づくと自動的に通知(メール通知/Line通知など)が来るようになり解約忘れを防ぎます。
                                </p>
                            </div>
                        </div>
                        <div class="mt-10 lg:mt-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">Twitter自動投稿</h5>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    毎月、月末に現在契約しているサブスクリプションが表示されフォロワーユーザーに共有することができます。
                                </p>
                            </div>
                        </div>
                        <div class="mt-10 lg:mt-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                </svg>
                            </div>
                            <div class="mt-5">
                                <h5 class="text-lg leading-6 font-medium text-gray-900">おすすめのサブスクリプションを紹介
                                </h5>
                                <p class="mt-2 text-base leading-6 text-gray-500">
                                    現在契約されているサブスクリプションを元におすすめのサブスクリプションをご紹介します。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('components.footer')


@endsection

