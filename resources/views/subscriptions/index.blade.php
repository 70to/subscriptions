@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                ¥2500
            </h1>
            <a href="{{route('add.subscription')}}"
               class="px-4 py-3 flex flex-row justify-center items-center text-gray-800 dark:text-gray-100 bg-white dark:bg-gray-800 rounded-lg-xl focus:outline-none shadow focus:shadow-outline transition duration-150">
                <svg fill="currentColor" class="h-5 mr-1" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <p class="font-medium text-base">追加する</p></a>
        </div>
    </header>
@endsection

@section('content')

    @foreach ($subscriptions as $subscription)
        @include('components.subscriptions.block')
    @endforeach

@endsection
