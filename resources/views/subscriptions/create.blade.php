@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                <span style="color: {{$service->color}}">{{$service->name ?? 'サブスク'}}</span>を追加する
            </h1>
        </div>
    </header>
@endsection

@section('content')
    <form class="lg:max-w-6xl md:max-w-5xl" action="{{route('subscriptions.store')}}" method="post">
        @include('subscriptions.form', ['buttonText' => '追加する'])
    </form>
@endsection
