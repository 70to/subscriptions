@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between">
            <h1 class="text-3xl font-bold leading-tight text-gray-900">
                サービスを追加する
            </h1>
        </div>
    </header>
@endsection

@section('content')
    @include('components.subscriptions.create')
@endsection
