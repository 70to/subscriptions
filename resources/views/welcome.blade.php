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
    <section>
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
                        <div class="lg:grid lg:grid-cols-3 lg:gap-8 mb-10">
                            <div>
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
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
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </div>
                                <div class="mt-5">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Twitter投稿</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        登録しているサブスクを簡単にフォロワーに共有することができます。
                                    </p>
                                </div>
                            </div>
                            <div class="mt-10 lg:mt-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                    </svg>
                                </div>
                                <div class="mt-5">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">コミュニティ</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        他のユーザーのサブスクが一覧として表示され、他人のサブスクを見ることができます。
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                            <div>
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div class="mt-5">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">もしかして契約している?</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Gmailと連携して契約されているであろうサブスクの一覧を取得して漏れがないようにします。
                                    </p>
                                </div>
                            </div>
                            {{--                            <div>--}}
                            {{--                                <div--}}
                            {{--                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">--}}
                            {{--                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"--}}
                            {{--                                         xmlns="http://www.w3.org/2000/svg">--}}
                            {{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
                            {{--                                              d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>--}}
                            {{--                                    </svg>--}}
                            {{--                                </div>--}}
                            {{--                                <div class="mt-5">--}}
                            {{--                                    <h5 class="text-lg leading-6 font-medium text-gray-900">プライベートモード</h5>--}}
                            {{--                                    <p class="mt-2 text-base leading-6 text-gray-500">--}}
                            {{--                                        登録しているサブスクを自分だけしか見れないようにします。--}}
                            {{--                                    </p>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="mt-10 lg:mt-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                                    </svg>
                                </div>
                                <div class="mt-5">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">ランキング</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        全ユーザーのサブスクを解析しランキングを作成することで人気のサブスクを知ることができます。
                                    </p>
                                </div>
                            </div>
                            <div class="mt-10 lg:mt-0">
                                <div
                                    class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
                                    </svg>
                                </div>
                                <div class="mt-5">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">おすすめのサブスクを紹介
                                    </h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        現在契約されているサブスクを元におすすめのサブスクリプションをご紹介します。
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-white">
            <div
                class="bg-gray-50 max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 lg:px-8 mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
                <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    開発者のサブスクを見てみる
                </h2>
                <div class="mt-8 flex justify-center">
                    <div class="inline-flex rounded-md shadow">
                        <a href="{{url('/7010')}}"
                           class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                            Sample
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

@endsection

