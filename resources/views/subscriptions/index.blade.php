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
                                            次回支払日
                                        </dt>
                                        <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                            {{$subscription->next_bill}}
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
@endsection
