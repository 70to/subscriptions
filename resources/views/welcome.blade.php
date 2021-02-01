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
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                                Stay on top of customer support
                            </h2>
                            <p class="mt-4 text-lg text-gray-500">
                                Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada
                                faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem
                                arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.
                            </p>
                            <div class="mt-6">
                                <a href="#"
                                   class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 hover:from-purple-700 hover:to-indigo-700">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 border-t border-gray-200 pt-6">
                        <blockquote>
                            <div>
                                <p class="text-base text-gray-500">
                                    “Cras velit quis eros eget rhoncus lacus ultrices sed diam. Sit orci risus aenean
                                    curabitur donec aliquet. Mi venenatis in euismod ut.”
                                </p>
                            </div>
                            <footer class="mt-3">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <img class="h-6 w-6 rounded-full"
                                             src="https://images.unsplash.com/photo-1509783236416-c9ad59bae472?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                                             alt="">
                                    </div>
                                    <div class="text-base font-medium text-gray-700">
                                        Marcia Hill, Digital Marketing Manager
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                            src="https://tailwindui.com/img/component-images/inbox-app-screenshot-1.jpg"
                            alt="Inbox user interface">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                    <div>
                        <div>
                  <span
                      class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-500">
                    <svg class="h-6 w-6 text-white" x-description="Heroicon name: sparkles"
                         xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         aria-hidden="true">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
</svg>
                  </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">
                               解約忘れ防止のための通知機能
                            </h2>
                            <p class="mt-4 text-lg text-gray-500">
                                Semper curabitur ullamcorper posuere nunc sed. Ornare iaculis bibendum malesuada
                                faucibus lacinia porttitor. Pulvinar laoreet sagittis viverra duis. In venenatis sem
                                arcu pretium pharetra at. Lectus viverra dui tellus ornare pharetra.
                            </p>
                            <div class="mt-6">
                                <a href="#"
                                   class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-500 hover:from-purple-700 hover:to-indigo-700">
                                    Get started
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                    <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img
                            class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none"
                            src="https://tailwindui.com/img/component-images/inbox-app-screenshot-2.jpg"
                            alt="Customer profile user interface">
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
                    Frequently asked questions
                </h2>

                <div class="mt-6 border-t border-gray-200 pt-10">
                    <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:grid-rows-2 md:gap-x-8 md:gap-y-12">
                        <div class="space-y-2">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                What's the best thing about Switzerland?
                            </dt>
                            <dd class="text-base leading-6 text-gray-500">
                                I don't know, but the flag is a big plus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                            </dd>
                        </div>

                        <div class="space-y-2">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Why do you never see elephants hiding in trees?
                            </dt>
                            <dd class="text-base leading-6 text-gray-500">
                                Because they're so good at it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                            </dd>
                        </div>

                        <div class="space-y-2">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                How do you make holy water?
                            </dt>
                            <dd class="text-base leading-6 text-gray-500">
                                You boil the hell out of it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                            </dd>
                        </div>

                        <div class="space-y-2">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Why can't you hear a pterodactyl go to the bathroom?
                            </dt>
                            <dd class="text-base leading-6 text-gray-500">
                                Because the pee is silent. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                            </dd>
                        </div>

                        <div class="space-y-2">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                What do you call someone with no body and no nose?
                            </dt>
                            <dd class="text-base leading-6 text-gray-500">
                                Nobody knows. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
                            </dd>
                        </div>

                        <div class="space-y-2">
                            <dt class="text-lg leading-6 font-medium text-gray-900">
                                Why did the invisible man turn down the job offer?
                            </dt>
                            <dd class="text-base leading-6 text-gray-500">
                                He couldn't see himself doing it. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas cupiditate laboriosam fugiat.
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
                    <span class="block">Boost your productivity.</span>
                    <span class="block">Start using Workflow today.</span>
                </h2>
                <p class="mt-4 text-lg leading-6 text-indigo-200">Ac euismod vel sit maecenas id pellentesque eu sed consectetur. Malesuada adipiscing sagittis vel nulla nec.</p>
                <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 hover:bg-indigo-50 transition duration-150 ease-in-out sm:w-auto">
                    Sign up for free
                </a>
            </div>
        </div>

    </section>
    @include('components.footer')

@endsection

