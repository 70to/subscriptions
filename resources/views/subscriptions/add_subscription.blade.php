@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-2xl sm:text-3xl font-bold  leading-tight text-gray-900">
                サブスクを追加する
            </h1>
            <a href="{{route('subscriptions.create')}}"
               class="inline-flex items-center px-4 py-2 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-gray-600 hover:bg-gray-500 focus:outline-none focus:border-gray-700 focus:shadow-outline-gray active:bg-gray-700 transition ease-in-out duration-150">
                <svg fill="currentColor" class="h-4 mr-1" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                          clip-rule="evenodd"></path>
                </svg>
                カスタム
            </a>
        </div>
    </header>
@endsection

@section('content')

    <add-subscription></add-subscription>

@endsection
