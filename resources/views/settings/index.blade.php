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
                        マイページ
                    </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">
              <span
                  class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                workcation.com/
              </span>
                            <input id="username"
                                   class="flex-1 form-input block w-full min-w-0 rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                        </div>

                    </div>
                </div>

                <div class="mt-8 ">
                    <div class="flex justify-end">
                      <span class="inline-flex rounded-md shadow-sm">
                        <button type="button"
                                class="py-2 px-4 border border-gray-300 rounded-md text-sm leading-5 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out">
                          Cancel
                        </button>
                      </span>
                                        <span class="ml-3 inline-flex rounded-md shadow-sm">
                        <button type="submit"
                                class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                          Save
                        </button>
                      </span>
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
                        <form action="{{route('user.delete')}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button onclick="return confirm('本当に削除してよろしいですか？データは完全に削除され復元することはできません。');" type="submit"
                                    class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-50 focus:outline-none focus:border-red-300 focus:shadow-outline-red active:bg-red-200 transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                アカウントを削除する
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
