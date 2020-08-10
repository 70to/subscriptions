@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-4xl font-bold leading-tight text-gray-900">
                設定
            </h1>
        </div>
    </header>
@endsection

@section('content')
    <form>
        <div>
            <div>
                <div class="mt-6 sm:mt-5 mb-20">
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="username" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px">
                            ユーザーネーム
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            {{Auth::user()->name}}
                        </div>
                    </div>

                    <div
                        class="mt-6 sm:mt-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-b sm:border-gray-200 sm:pt-5 sm:pb-5">
                        <label for="username" class="block text-sm font-medium leading-5 text-gray-700 sm:mt-px">
                            メールアドレス
                        </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            {{Auth::user()->email}}
                        </div>
                    </div>

                </div>

            </div>

            <div class="bg-white shadow sm:rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <h3 class="text-lg leading-6 font-bold text-gray-900">
                       アカウントを削除
                    </h3>
                    <div class="mt-2 text-sm leading-5 text-gray-500">
                        <p>
                            一度アカウントを削除すると、登録データや作成データは全て削除され、復元することができません。
                        </p>
                    </div>
                    <div class="mt-5">
                        <button type="button"
                                class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-50 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            アカウントを削除する
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection
