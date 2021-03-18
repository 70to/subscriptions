@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                設定
            </h1>
        </div>
    </header>
@endsection

@section('content')
    <div>
        <form action="{{route('settings.update')}}" method="post" class="mb-10">
            @csrf
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">

                    <div class="mb-6">
                        <h2 id="payment_details_heading" class="text-lg leading-6 font-medium text-gray-900">
                            Account</h2>
                    </div>

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-4">

                            <label class="block font-medium text-sm text-gray-700" for="current_password">
                                ユーザーネーム
                            </label>

                            <input class="form-input rounded-md shadow-sm mt-1 block w-full" name="name" type="text"
                                   value="{{Auth::user()->name}}">
                            @if ($errors->has('name'))
                                <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first('name')}}</p>
                            @endif
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700">
                                公開用URL
                            </label>

                            <div class="max-w-lg flex rounded-md shadow-sm mt-1">
                              <span
                                  class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 sm:text-sm">
                               {{url('/')}}/
                              </span>
                                <input id="username" value="{{Auth::user()->slug}}" name="slug"
                                       class="flex-1 form-input block w-full min-w-0 rounded-none rounded-r-md transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            </div>
                            @if ($errors->has('slug'))
                                <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first('slug')}}</p>
                            @endif
                        </div>

                        <div class="col-span-6 sm:col-span-4">
                            <label class="block font-medium text-sm text-gray-700">
                                レポート用メールアドレス
                                <span class="tooltip inline-block align-bottom">
                                    <span class="tooltip-text">メールアドレスを設定すると<br>毎月契約しているサブスクの一覧がレポートで送られてきます。</span>
                                    <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </span>
                            </label>

                            <input class="form-input rounded-md shadow-sm mt-1 block w-full" name="name" type="email"
                                   placeholder="you@example.com"
                                   value="">
                            @if ($errors->has('slug'))
                                <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first('slug')}}</p>
                            @endif
                        </div>

                    </div>
                </div>

                <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                        保存する
                    </button>
                </div>
            </div>
        </form>
        <div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
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
                                class="inline-flex items-center justify-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-600 transition ease-in-out duration-150"
                                wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                            アカウントを削除する
                        </button>
                    </form>
                </div>
            </div>
        </div>
@endsection
