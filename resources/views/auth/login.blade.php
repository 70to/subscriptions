@extends('layouts.auth')

@section('content')

    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="mx-auto text-center">
            <h2 class="mt-6 mb-10 text-center text-4xl leading-9 font-extrabold text-gray-900">
                Welcome!
            </h2>
            <div>
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
            <div>
                <a
                    href="{{url('/')}}"
                    class="mt-6 w-full text-gray-500 text-center justify-center mx-auto inline-flex items-center">
                    <svg fill="currentColor" class="h-6" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-sm">TOPへ戻る</p>
                </a>
            </div>
        </div>

        {{--        <div class="sm:mx-auto sm:w-full sm:max-w-md">--}}
        {{--            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">--}}
        {{--                ログイン--}}
        {{--            </h2>--}}
        {{--            <p class="mt-2 text-center text-sm leading-5 text-gray-600 max-w">--}}
        {{--                Or--}}
        {{--                <a href="{{route('register')}}"--}}
        {{--                   class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">--}}
        {{--                    アカウント登録--}}
        {{--                </a>--}}
        {{--            </p>--}}
        {{--        </div>--}}

        {{--        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">--}}
        {{--            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">--}}
        {{--                <form action="{{ route('login') }}" method="POST">--}}
        {{--                    @csrf--}}
        {{--                    <div>--}}
        {{--                        <label for="email" class="block text-sm font-medium leading-5 text-gray-700">--}}
        {{--                            メールアドレス--}}
        {{--                        </label>--}}
        {{--                        <div class="mt-1 rounded-md shadow-sm">--}}
        {{--                            <input id="email" type="email" required--}}
        {{--                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"--}}
        {{--                                   name="email" value="{{ old('email') }}"/>--}}
        {{--                        </div>--}}
        {{--                        @if ($errors->has('email'))--}}
        {{--                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('email') }}</p>--}}
        {{--                        @endif--}}
        {{--                    </div>--}}

        {{--                    <div class="mt-6">--}}
        {{--                        <label for="password" class="block text-sm font-medium leading-5 text-gray-700">--}}
        {{--                            パスワード--}}
        {{--                        </label>--}}
        {{--                        <div class="mt-1 rounded-md shadow-sm">--}}
        {{--                            <input id="password" type="password" required--}}
        {{--                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"--}}
        {{--                                   name="password"/>--}}
        {{--                        </div>--}}
        {{--                        @if ($errors->has('password'))--}}
        {{--                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('password') }}</p>--}}
        {{--                        @endif--}}
        {{--                    </div>--}}

        {{--                    <div class="mt-6 flex items-center justify-between">--}}
        {{--                        <div class="flex items-center">--}}
        {{--                            <input id="remember_me" type="checkbox"--}}
        {{--                                   class="form-checkbox h-4 w-4 text-blue-600 transition duration-150 ease-in-out"--}}
        {{--                                   name="remember" {{ old('remember') ? 'checked' : '' }}/>--}}
        {{--                            <label for="remember_me" class="ml-2 block text-sm leading-5 text-gray-900">--}}
        {{--                                ログインしたままにする--}}
        {{--                            </label>--}}
        {{--                        </div>--}}

        {{--                        <div class="text-sm leading-5">--}}
        {{--                            <a href="{{ route('password.request') }}"--}}
        {{--                               class="font-medium text-blue-600 hover:text-blue-500 focus:outline-none focus:underline transition ease-in-out duration-150">--}}
        {{--                                パスワードを忘れましたか?--}}
        {{--                            </a>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}

        {{--                    <div class="mt-6">--}}
        {{--                      <span class="block w-full rounded-md shadow-sm">--}}
        {{--                        <button type="submit"--}}
        {{--                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">--}}
        {{--                          ログイン--}}
        {{--                        </button>--}}
        {{--                      </span>--}}
        {{--                    </div>--}}
        {{--                </form>--}}

        {{--                <div class="mt-6">--}}
        {{--                    <div class="relative">--}}
        {{--                        <div class="absolute inset-0 flex items-center">--}}
        {{--                            <div class="w-full border-t border-gray-300"></div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
@endsection
