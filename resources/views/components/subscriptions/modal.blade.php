<v-modal>
    <template v-slot:button>
        {{ $slot }}
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
                                    料金
                                </dt>
                                <dd class="mt-1 text-sm leading-5 text-gray-900 sm:mt-0 sm:col-span-2">
                                    {{$subscription->price}}円
                                </dd>
                            </div>
                        @if (Auth::user() && Auth::user()->checkMe())
                                <div class="p-6">
                                    <div class="mt-8 sm:border-t sm:border-gray-200 sm:pt-5 text-center">
                                        <a href="{{route('subscriptions.edit', $subscription->uuid)}}" style="background: {{$subscription->service->color}}"
                                           class="inline-flex items-center px-6 py-3 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                                            編集する
                                        </a>
                                    </div>
                                </div>
                            @endif
                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </template>
</v-modal>
