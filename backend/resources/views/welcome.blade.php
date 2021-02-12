@extends('layouts.skeleton')

@section('content')
    <section class="bg-white">
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
    </section>

    <div class="relative pt-16 pb-32 lg:overflow-hidden">
        <div aria-hidden="true" class="absolute inset-x-0 top-0 h-48 bg-gradient-to-b from-gray-100"></div>
        <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                    <div>
                        <div>
                  <span
                      class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-500">
                    <svg class="h-6 w-6 text-white" x-description="Heroicon name: inbox"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
</svg>
                  </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 leading-10">
                                毎月、使用しているサブスクを自動ツイートすることが可能！
                            </h2>
                            <p class="mt-4 text-lg text-gray-500 leading-6">
                                一日の中で最も使われているのはTwitterアプリと考え、Mysubscでは毎月、使用しているサブスクを合計金額といっしょにツイートしてくれます。
                                そのため、サブスクの解約忘れを防いでくれます。 また、使用しているサブスクに対して、誰かがあなたにいいねを押してくれるかもしれません。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                            src="{{asset('imgs/tweet_sample.png')}}"
                            alt="Inbox user interface">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
        <div class="bg-white">
            <div class="max-w-screen-xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
                <h2 class="text-3xl leading-9 font-extrabold text-gray-900">
                    よくある質問
                </h2>

                <div class="mt-6 border-t border-gray-200 pt-10">
                    <dl>
                        <div class="space-y-2">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                無料で使用できますか？
                            </dt>
                            <dd class="text-base leading-6 text-gray-500">
                                はい、無料で使用することができます。
                            </dd>
                        </div>

                        <div class="space-y-2 mt-6">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                どんなサービスですか？
                            </dt>
                            <dd class="text-base leading-6 text-gray-500">
                                現在、契約しているサブスクを毎月ツイートすることで、無駄なサブスクを契約することを防ぐために作られたアプリです。
                            </dd>
                        </div>

                    </dl>
                </div>
            </div>
        </div>

    </section>

    <section>
        <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
        <div class="bg-indigo-700">
            <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
                <h2 class="text-3xl leading-9 font-extrabold text-white sm:text-4xl sm:leading-10">
                    <span class="block">Ready to dive in?</span>
                </h2>
                <a href="{{route('register')}}" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 hover:bg-indigo-50 transition duration-150 ease-in-out sm:w-auto">
                    Get Started
                </a>
            </div>
        </div>

    </section>
    @include('components.footer')

@endsection

