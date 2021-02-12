<?php

namespace App\Http\Controllers;


use App\Console\Commands\NotifyPaymentDateCommand;
use App\Http\Requests\SettingRequest;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        $day = NotifyPaymentDateCommand::$day;
        return view('settings.index', compact('day'));
    }

    public function update(SettingRequest $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->slug = $request->slug;
        $user->save();
        return back();
    }

    public function deleteAccount()
    {
        $user = Auth::user();

        if ($user->subscriptions()->exists()) {
            $user->subscriptions()->delete();
        }

        if ($user->socialUsers()->exists()) {
            $user->socialUsers()->delete();
        }

        $user->delete();
        return redirect('/');
    }
}