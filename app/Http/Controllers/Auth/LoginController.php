<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\SocialUser;
use DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login()
    {
        return Socialite::with('google')->redirect();
    }

    public function callback()
    {
        $providerUser = Socialite::driver('google')->user();

        // 既に存在するユーザーかを確認
        $socialUser = SocialUser::where('provider_user_id', $providerUser->id)->first();

        if ($socialUser) {
            $socialUser->user->email = $providerUser->email;
            $socialUser->user->save();
            // 既存のユーザーはログインしてトップページへ
            Auth::login($socialUser->user, true);
            return $this->redirectTo();
        }

//        dd($providerUser);

        // 新しいユーザーを作成
        $user = new User();
        $user->unique_id = $providerUser->id;
        $user->name = $providerUser->name;
        $user->email = $providerUser->email;
        $user->avatar = $providerUser->user['picture'];

        $socialUser = new SocialUser();
        $socialUser->provider_user_id = $providerUser->id;

        DB::transaction(function () use ($user, $socialUser) {
            $user->save();
            $user->socialUsers()->save($socialUser);
        });

        Auth::login($user, true);
        return $this->redirectTo();
    }

    protected function redirectTo()
    {
        if (!Auth::user()) {
            return '/';
        }
        return redirect()->route('subscriptions.index', Auth::user()->slug);
    }
}
