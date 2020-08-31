<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index()
    {
        return view('settings.index');
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
