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
        if ($request->service_id) {
            $service = Service::findOrFail($request->service_id);
        } else {
            $service = Service::find(Service::CUSTOM);
            $service->name = null;
        }
        return view('subscriptions.create', compact('subscriptions', 'service', 'cycles'));
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
            'first_bill' => $request->first_bill,
            'memo' => $request->memo
        ]);
        return redirect()->route('subscriptions.index', $user->unique_id);
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

        $cycles = Subscription::CYCLE;
        return view('subscriptions.edit', compact('subscription', 'cycles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        $this->authorize('update', $subscription);
        $user = Auth::user();
        $subscription->service_id = $request->service_id;
        $subscription->name = $request->name;
        $subscription->cycle_id = $request->cycle_id;
        $subscription->price = $request->price;
        $subscription->first_bill = $request->first_bill;
        $subscription->memo = $request->memo;
        $subscription->save();
        return redirect()->route('subscriptions.index', $user->unique_id);
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
        return redirect()->route('subscriptions.index', $user->unique_id);
    }
}
