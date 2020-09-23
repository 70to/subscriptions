@extends('layouts.skeleton')

@section('content')

    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="mx-auto text-center">
            <h2 class="mt-6 mb-12 text-center text-5xl leading-9 font-extrabold text-gray-900">
                Welcome!
            </h2>
            <div class="mb-6">
                <a href="{{route('google.login')}}"
                   class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white focus:outline-none focus:shadow-outline-indigo transition ease-in-out duration-150"
                   style="background: #4285f4">
                    <svg class="h-5 h-5 mr-2 text-white" fill="currentColor" xmlns="http://www.w3.org/2000/svg" aria-labelledby="qgb70i822joe25tlwetic6wx13bigx6" role="img" viewBox="0 0 24 24"><title id="qgb70i822joe25tlwetic6wx13bigx6">Google icon</title><path d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"></path></svg>
                    Googleでログイン
                </a>
            </div>
            <p class="leading-6 text-sm"> このアプリを使用する前に、<a href="{{route('privacy')}}" class="text-blue-600">プライバシーポリシー</a>と<a href="{{route('terms')}}" class="text-blue-600">利用規約</a>をご確認ください。</p>
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
