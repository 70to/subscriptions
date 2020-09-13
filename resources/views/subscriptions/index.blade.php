@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-end">
            <div>
                <div class="flex-shrink-0 group block focus:outline-none">
                    <div class="flex items-center">
                        <div>
                            <img class="inline-block h-12 w-12 rounded-full" src="{{$user->avatar}}" alt="">
                        </div>
                        <div class="ml-3">
                            <p class="text-xl leading-5 font-medium text-gray-700 group-hover:text-gray-900 mb-0.5">
                                {{$user->name}}
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <h1 class="text-4xl font-bold leading-tight text-gray-900">
                {{$month_sum}}<span
                    class="text-xl">&nbsp円/月</span>
            </h1>
        </div>
    </header>
@endsection

@section('content')
    @if (count($subscriptions) === 0)
        <div class="mx-auto text-center">
            <img src="{{asset('imgs/undraw_no_data_qbuo.png')}}" alt="" class="w-48 mx-auto">
            <h2 class="text-3xl font-bold mb-2">No Subscriptions</h2>
        </div>
    @endif
{{--    <my-subscriptions></my-subscriptions>--}}
    @foreach ($subscriptions as $subscription)

        @if (Auth::user() && (Auth::user()->id === $subscription->user_id))
            @component('components.subscriptions.modal', ['subscription' => $subscription])
                @include('components.subscriptions.block')
            @endcomponent
        @else
            @include('components.subscriptions.block')
        @endif

    @endforeach
{{--    <div>--}}
{{--        <div class="w-1/5 mx-auto mt-10">--}}
{{--            <p class="text-gray-600 mb-2 text-center">\snsにシェアしよう/</p>--}}
{{--            <span class="w-full inline-flex rounded-md shadow-sm">--}}
{{--              <button type="button" class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md bg-white text-sm leading-5 font-medium text-gray-500 hover:text-gray-400 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition duration-150 ease-in-out" aria-label="Sign in with Twitter">--}}
{{--                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">--}}
{{--                  <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84" />--}}
{{--                </svg>--}}
{{--              </button>--}}
{{--            </span>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
