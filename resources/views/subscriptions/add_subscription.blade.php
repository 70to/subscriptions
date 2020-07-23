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
    <div class="relative mb-3">
            <span class="w-full"
                  style="position: relative; display: inline-block; direction: ltr;"><input
                    id="docsearch" type="text" placeholder="サービスを探す" autocomplete="off" spellcheck="false"
                    role="combobox" aria-autocomplete="list" aria-expanded="false" aria-label="search input"
                    aria-owns="algolia-autocomplete-listbox-2" dir="auto"
                    class="transition border border-transparent placeholder-gray-600 rounded-lg bg-gray-200 py-4 pr-4 pl-10 block w-full appearance-none leading-normal ds-input outline-none border-none"
                    style="position: relative; vertical-align: top;"><pre aria-hidden="true"
                                                                          style="position: absolute; visibility: hidden; white-space: pre; font-family: -apple-system, system-ui, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 16px; font-style: normal; font-variant: normal; font-weight: 400; word-spacing: 0px; letter-spacing: normal; text-indent: 0px; text-rendering: auto; text-transform: none;"></pre><span
                    role="listbox" id="algolia-autocomplete-listbox-2" class="ds-dropdown-menu"
                    style="position: absolute; top: 100%; z-index: 100; left: 0px; right: auto; display: none;"><div
                        class="ds-dataset-3"></div></span></span>
        <div class="pointer-events-none absolute inset-y-0 left-0 pl-4 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                 class="fill-current pointer-events-none text-gray-600 w-4 h-4">
                <path
                    d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
            </svg>
        </div>
    </div>
    @foreach ($subscriptions as $subscription)
        @include('components.subscriptions.block')
    @endforeach
@endsection
