@extends('layouts.app')

@section('content-header')
    <header>
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-4xl font-bold leading-tight text-gray-900">
                {{$month_sum}}<span
                    class="text-xl">&nbsp円/月</span>
            </h1>
            <a href="{{route('add.subscription')}}"
               class="px-4 py-2.5 inline-flex items-center  flex flex-row justify-center items-center bg-gray-500 text-white rounded-lg-xl focus:outline-none transition duration-150">
                <svg fill="currentColor" class="h-4 mr-1" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <p class="font-medium text-sm">追加する</p>
            </a>
        </div>
    </header>
@endsection

@section('content')
    @if (count($subscriptions) === 0)
        <div class="mx-auto text-center">
            <img src="{{asset('imgs/undraw_no_data_qbuo.png')}}" alt="" class="w-48 mx-auto">
            <h2 class="text-xl font-bold mb-2">まだサブスクリプションが登録されていません。</h2>
            <p class="mb-4 text-gray-600">サブスクリプションを把握して無駄な支出を抑えましょう！</p>
            <a href="{{route('add.subscription')}}"
               class="px-4 py-2.5 inline-flex items-center  flex flex-row justify-center items-center bg-gray-500 text-white rounded-lg-xl focus:outline-none transition duration-150">
                <svg fill="currentColor" class="h-4 mr-1" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                          d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                          clip-rule="evenodd"></path>
                </svg>
                <p class="font-medium text-sm">追加する</p>
            </a>
        </div>
    @endif
{{--    <my-subscriptions></my-subscriptions>--}}
    @foreach ($subscriptions as $subscription)
        <v-modal>
            <template v-slot:button>
                @include('components.subscriptions.block')
            </template>
            <template v-slot:content>
                <div>
                    <div class="p-10 text-center" style="background: {{$subscription->service->color}}">
                        <p class="text-3xl text-white">{{$subscription->name}}</p>
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
                                            {{$subscription->name}}
                                        </dd>
                                    </div>
                                    <div
                                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            支払い周期
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{\App\Models\Subscription::CYCLE[$subscription->cycle_id]['label']}}
                                        </dd>
                                    </div>
                                    <div
                                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            料金
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{$subscription->price}}
                                        </dd>
                                    </div>
                                    <div
                                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            初回支払日
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{$subscription->first_bill}}
                                        </dd>
                                    </div>
                                    <div
                                        class="mt-8 sm:grid sm:mt-5 sm:grid-cols-3 sm:gap-4 sm:border-t sm:border-gray-200 sm:pt-5">
                                        <dt class="text-sm leading-5 font-medium text-gray-500">
                                            メモ
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{$subscription->memo}}
                                        </dd>
                                    </div>
                                    <div class="p-6">
                                        <div class="mt-8 sm:border-t sm:border-gray-200 sm:pt-5 text-center">
                                            <a href="{{route('subscriptions.edit', $subscription->id)}}"
                                               class="px-4 py-2.5 inline-flex items-center  flex flex-row justify-center items-center bg-gray-500 text-white rounded-lg-xl focus:outline-none transition duration-150">
                                                <p class="font-medium text-sm">編集する</p>
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
