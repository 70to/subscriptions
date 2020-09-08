@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                サービスを編集する
            </h1>
            <div>
                <form action="{{route('subscriptions.destroy', $subscription->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('本当に削除しますか?');">
                        <svg fill="none" class="h-6 text-gray-900" stroke-linecap="round" stroke-linejoin="round"
                             stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path
                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <form class="lg:max-w-6xl md:max-w-5xl" action="{{route('subscriptions.update', $subscription->id)}}" method="post">
        @method('PUT')
        @include('subscriptions.form', ['buttonText' => '更新する'])
    </form>
@endsection
