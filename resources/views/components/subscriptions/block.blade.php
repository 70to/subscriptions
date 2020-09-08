<div @if (Auth::user() && (Auth::user()->id === $subscription->user_id)) class="cursor-pointer" @endif>
    <div class="px-6 py-4 mb-4 flex justify-between items-center" style="background: {{$subscription->service->color}}">
        <h2 class="text-2xl text-white">{{$subscription['name'] ?? 'custom'}}</h2>
        <div>
            <div>
                <p class="text-white text-3xl mb-1">{{$subscription->price}}<span
                        class="text-sm">&nbsp;円/{{\App\Models\Subscription::CYCLE[$subscription->cycle_id]['unit']}}</span>
                </p>
                @if (Auth::user() && (Auth::user()->id === $subscription->user_id))
                    <p class="text-white text-sm">次回支払日: {{$subscription->next_bill}}</p>
                @endif
            </div>
        </div>
    </div>
</div>
