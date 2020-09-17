<div @if (Auth::user() && (Auth::user()->id === $subscription->user_id)) class="cursor-pointer" @endif>
    <div class="px-4 sm:px-6 py-2 sm:py-4 mb-2 sm:mb-4 flex justify-between items-center" style="background: {{$subscription->service->color}}">
        <h2 class="text-xl sm:text-2xl text-white">{{$subscription['name'] ?? 'custom'}}</h2>
        <div>
            <div>
                <p class="text-white text-2xl sm:text-3xl mb-1">{{$subscription->price}}<span
                        class="text-xs sm:text-sm">&nbsp;円/{{\App\Models\Subscription::CYCLE[$subscription->cycle_id]['unit']}}</span>
                </p>
                @if (Auth::user() && (Auth::user()->id === $subscription->user_id))
                    <p class="text-white text-xs sm:text-sm">次回支払日: {{$subscription->payment_date}}</p>
                @endif
            </div>
        </div>
    </div>
</div>
