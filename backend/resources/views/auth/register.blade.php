@extends('layouts.skeleton')

@section('content')


    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
    <div class="bg-white pb-8 sm:pb-12 lg:pb-12">
        <div class="pt-8 overflow-hidden sm:pt-12 lg:relative lg:py-48">
            <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl lg:grid lg:grid-cols-2 lg:gap-24">
                <div>
{{--                    <div>--}}
{{--                        <img class="h-11 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=indigo&shade=600" alt="Workflow">--}}
{{--                    </div>--}}
                    <div class="mt-20">
                        <div class="mt-6 sm:max-w-xl">
                            <h1 class="text-4xl font-extrabold text-gray-900 tracking-tight sm:text-5xl">
                                Welcome!
                            </h1>
                            <p class="mt-6 text-xl text-gray-500 leading-7">
                                Mysubscではツイッターのアカウントを利用して、登録しているサブスク一覧を定期的に自動ツイートします。<br>
                                登録の際に右の画面が表示されますが、利用している権限は赤枠で囲っている箇所のみとなります。
                            </p>
                        </div>
                        <div class="mt-4">
                        <a href="{{route('twitter.login')}}"
                           class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white focus:outline-none focus:shadow-outline-indigo transition ease-in-out duration-150"
                           style="background: #1DA1F2">
                            <svg class="h-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                            Twitterでログイン
                        </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sm:mx-auto sm:max-w-3xl sm:px-6">
                <div class="py-12 sm:relative sm:mt-12 sm:py-16 lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
                    <div class="hidden sm:block">
                        <div class="absolute inset-y-0 left-1/2 w-screen bg-gray-50 rounded-l-3xl lg:left-80 lg:right-0 lg:w-full"></div>
                        <svg class="absolute top-8 right-1/2 -mr-3 lg:m-0 lg:left-0" width="404" height="392" fill="none" viewBox="0 0 404 392">
                            <defs>
                                <pattern id="837c3e70-6c3a-44e6-8854-cc48c737b659" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="392" fill="url(#837c3e70-6c3a-44e6-8854-cc48c737b659)" />
                        </svg>
                    </div>
                    <div class="relative pl-4 sm:-mr-40 sm:mx-auto sm:max-w-3xl sm:px-0 lg:max-w-none lg:h-full lg:pl-12">
                        <img class="w-full rounded-md shadow-xl ring-1 ring-black ring-opacity-5 lg:h-full lg:w-auto lg:max-w-none" src="{{asset('imgs/twitter_login_desc.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
