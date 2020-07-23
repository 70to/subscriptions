<v-modal :width="['btn', 'btn-outline-info', 'btn-sm', {active: isActive}]">
    <template v-slot:button>
        <a href="#">
            <div class="p-6 mb-4 border bg-green-400 flex justify-between items-center">
                <h2 class="text-2xl text-white">{{$subscription['name'] ?? 'custom'}}</h2>
                <div>
                    @if(url()->current() === route('subscriptions.index'))
                        <div>
                            <p class="text-white text-2xl">¥980/<span class="text-base">月</span></p>
                        </div>
                    @endif
                    @if(url()->current() === route('subscriptions.create'))
                        <svg fill="currentColor" class="text-white h-6" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    @endif
                </div>
            </div>
        </a>
    </template>
    <template v-slot:content>
        @if(url()->current() === route('subscriptions.create'))
            @include('components.subscriptions.create')
        @endif
    </template>
</v-modal>
