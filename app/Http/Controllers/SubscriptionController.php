<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriptions = [
          [
            'name' => 'Youtube'
          ],
          [
            'name' => 'Spotify'
          ],
        ];
        return view('subscriptions.index', compact('subscriptions'));
    }

    public function addSubscription()
    {
        $subscriptions = [
            [
                'name' => 'Youtube'
            ],
            [
                'name' => 'Spotify'
            ],
        ];

        return view('subscriptions.add_subscription', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $cycles = Subscription::CIRCLE;
        $service = $request->service;
        return view('subscriptions.create', compact('subscriptions', 'service', 'cycles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $subscription = new Subscription();
        $subscription->name = $request->name;
        $subscription->cycle_id = $request->cycle;
        $subscription->price = $request->price;
        $subscription->next_bill = $request->next_bill;
        $subscription->memo = $request->memo;
        $subscription->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscription $subscription)
    {
        //
    }
}
