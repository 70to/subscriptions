@extends('layouts.skeleton')

@section('content')

    <div class="min-h-screen bg-gray-50 flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                Password Reset
            </h2>
        </div>

        <div class="mt-8 sm:mx-auto  sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <div class="mt-6">
                        <label for="email" class="text-left block text-sm font-medium leading-5 text-gray-700">
                            メールアドレス
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="email" type="email" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                   name="email" value="{{ old('email') }}"/>
                        </div>
                        @if ($errors->has('email'))
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('email') }}</p>
                        @endif
                    </div>

                    <div class="mt-6">
                        <label for="password" class="text-left block text-sm font-medium leading-5 text-gray-700">
                            パスワード
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password" type="password" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                   name="password"/>
                        </div>
                        @error('password')
                        <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6">
                        <label for="password-confirm"
                               class="text-left block text-sm font-medium leading-5 text-gray-700">
                            パスワード再入力
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                            <input id="password-confirm" type="password" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                   name="password_confirmation"/>
                        </div>
                        @if ($errors->has('password'))
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('password') }}</p>
                        @endif
                    </div>

                    <div class="mt-6">
                      <span class="block w-full rounded-md shadow-sm">
                        <button type="submit"
                                class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue active:bg-blue-700 transition duration-150 ease-in-out">
                          リセットする
                        </button>
                      </span>
                    </div>
                </form>

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
@endsection

