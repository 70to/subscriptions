<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $subscriptions = $user->subscriptions()->get();
        $month_sum = Subscription::calculate();
        return view('subscriptions.index', compact('subscriptions', 'month_sum'));
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
            $service->name = '';
        }
        return view('subscriptions.create', compact('subscriptions', 'service', 'cycles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $user = Auth::user();
        $user->subscriptions()->create([
            'service_id' => $request->service_id,
            'name' => $request->name,
            'cycle_id' => $request->cycle_id,
            'price' => $request->price,
            'next_bill' => $request->next_bill,
            'memo' => $request->memo
        ]);
        return redirect()->route('subscriptions.index');
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
        $subscription->service_id = $request->service_id;
        $subscription->name = $request->name;
        $subscription->cycle_id = $request->cycle_id;
        $subscription->price = $request->price;
        $subscription->next_bill = $request->next_bill;
        $subscription->memo = $request->memo;
        $subscription->save();
        return redirect()->route('subscriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Subscription $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
