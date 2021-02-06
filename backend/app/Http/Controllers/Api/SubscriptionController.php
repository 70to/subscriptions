<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function getMySubscriptions()
    {
        $user = Auth::user();
        $subscriptions = Subscription::where('user_id', $user->id)->with('service')->get();
        return response()->json([
            'subscriptions'  => $subscriptions
        ]);
    }

    public function tweet(Request $request)
    {
        $filename = $request->photo->getClientOriginalName();
        $request->photo->storeAs('public/images', $filename);
    }
}
