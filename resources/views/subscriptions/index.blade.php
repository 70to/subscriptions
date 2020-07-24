@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-4xl font-bold leading-tight text-gray-900">
                ¥2500
            </h1>
            <a href="{{route('add.subscription')}}"
               class="px-4 py-2.5 flex flex-row justify-center items-center bg-gray-500 text-white rounded-lg-xl focus:outline-none transition duration-150">
                <svg fill="currentColor" class="h-4 mr-1" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <p class="font-medium text-sm">追加する</p></a>
        </div>
    </header>
@endsection

@section('content')
    @foreach ($subscriptions as $subscription)
        <v-modal>
            <template v-slot:button>
                @include('components.subscriptions.block')
            </template>
            <template v-slot:content>
                <div>
                    <div class="bg-green-400 p-10 text-center">
                        <p class="text-3xl text-white">Spotify</p>
                    </div>
                    <div class="p-8">
                        <div>
                            <div class="mt-5 border-t border-gray-200 pt-5">
                                <dl>
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            サービス名
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            Spotify
                                        </dd>
                                    </div>
                                    <div
                                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            支払い周期
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            月額
                                        </dd>
                                    </div>
                                    <div
                                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            料金
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            980円
                                        </dd>
                                    </div>
                                    <div
                                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            次回支払日
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            2020年1月8日
                                        </dd>
                                    </div>
                                    <div
                                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            メモ
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt
                                            cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id
                                            mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur
                                            mollit ad adipisicing reprehenderit deserunt qui eu.
                                        </dd>
                                    </div>
                                    <div class="p-6">
                                        <div class="mt-8 sm:border-t sm:border-gray-200 sm:pt-5 text-center">
                                            <a href="{{route('subscriptions.create')}}"
                                               class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                                編集する
                                            </a>
                                        </div>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </v-modal>
    @endforeach
@endsection
