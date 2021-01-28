<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Ramsey\Uuid\Uuid;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->attributes['slug'] = Uuid::uuid4()->toString();
    }

    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription');
    }

    public function socialUsers()
    {
        return $this->hasMany(SocialUser::class);
    }

    public function checkMe()
    {
        return (bool)(Auth::id() === $this->id);
    }

    public function getTweetBody(string $line_feed_code): string
    {
        $str = "■契約中サブスク$line_feed_code$line_feed_code";

        $sum = 0;
        foreach ($this->subscriptions as $subscription) {
            $sum += $subscription->month_price;
            $str .= "・{$this->getSubscriptionPriceStr($subscription)}$line_feed_code";
        }

        $str .= $line_feed_code."合計: {$sum} 円/月$line_feed_code";

        $str .= route('subscriptions.index', $this->slug).$line_feed_code;

        return $str;
    }

    private function getSubscriptionPriceStr(Subscription $subscription)
    {
        if ($subscription->cycle_id === 1) {
            return "{$subscription->name} {$subscription->price}円/月";
        } elseif ($subscription->cycle_id === 2) {
            return "{$subscription->name} {$subscription->month_price}円/月({$subscription->price}円/年)";
        }
    }
}
