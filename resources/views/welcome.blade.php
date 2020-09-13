@extends('layouts.skeleton')

@section('content')
    <div class="bg-gray-50">
        <div class="relative overflow-hidden">

            @include('components.header')

            <div class="relative pt-6 pb-12 lg:pb-20">

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

                <div class="mt-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 md:mt-16 lg:mt-20">
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
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <img class="relative rounded-lg shadow-lg mx-auto"
                         src="{{asset('imgs/screenshot_2.png')}}"
                         alt="App screenshot">
                </div>
            </div>
        </div>
    </div>
    <div class="py-12 bg-white">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 lg:px-8">
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
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path></svg>
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
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
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

