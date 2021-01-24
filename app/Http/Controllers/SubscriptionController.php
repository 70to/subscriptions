<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionRequest;
use App\Models\Subscription;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        $subscriptions = $user->subscriptions()->get();
        $subscriptions = $subscriptions->sortBy('payment_date');
        $month_sum = Subscription::calculate($user);
        return view('subscriptions.index', compact('user', 'subscriptions', 'month_sum'));
    }

    public function addSubscription()
    {
        return view('subscriptions.add_subscription');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cycles = Subscription::CYCLE;
        $is_custom_service = false;
        if ($request->service_id) {
            $service = Service::findOrFail($request->service_id);
        } else {
            $service = Service::find(Service::CUSTOM);
            $is_custom_service = true;
        }
        return view('subscriptions.create', compact('service', 'cycles', 'is_custom_service'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubscriptionRequest $request)
    {
        $user = Auth::user();
        $user->subscriptions()->create([
            'service_id' => $request->service_id,
            'name' => $request->name,
            'cycle_id' => $request->cycle_id,
            'price' => $request->price,
            'month_price' => $this->getMonthPrice($request->cycle_id, $request->price),
        ]);
        return redirect()->route('subscriptions.index', $user->slug);
    }

    private function getMonthPrice(int $cycle_id, int $price)
    {
        if ($cycle_id === 1) {
            return $price;
        } elseif ($cycle_id === 2) {
            return floor($price / 12);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        $this->authorize('view', $subscription);

        if ($subscription->service->id === Service::CUSTOM) {
            $is_custom_service = true;
        } else {
            $is_custom_service = false;
        }
        $cycles = Subscription::CYCLE;
        return view('subscriptions.edit', compact('subscription', 'cycles', 'is_custom_service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(SubscriptionRequest $request, Subscription $subscription)
    {
        $this->authorize('update', $subscription);
        $user = Auth::user();
        $subscription->service_id = $request->service_id;
        $subscription->name = $request->name;
        $subscription->cycle_id = $request->cycle_id;
        $subscription->price = $request->price;
        $subscription->month_price = $this->getMonthPrice($request->cycle_id, $request->price);
        $subscription->save();
        return redirect()->route('subscriptions.index', $user->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        $this->authorize('delete', $subscription);
        $user = Auth::user();
        $subscription->delete();
        return redirect()->route('subscriptions.index', $user->slug);
    }
}
