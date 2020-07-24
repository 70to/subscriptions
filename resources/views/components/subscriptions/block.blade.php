<a href="#">
    <div class="p-6 mb-4 flex justify-between items-center" style="background: {{$subscription->service->color}}">
        <h2 class="text-2xl text-white">{{$subscription['name'] ?? 'custom'}}</h2>
        <div>
            <div>
                <p class="text-white text-2xl">¥{{$subscription->price}}/<span
                        class="text-base">{{\App\Models\Subscription::CYCLE[$subscription->cycle_id]['unit']}}</span>
                </p>
            </div>
        </div>
    </div>
</a>
