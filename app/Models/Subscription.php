<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Subscription extends Model
{
    protected $guarded = [];

    const CYCLE = [
        1 => ['label' => '月に一回', 'unit' => '月', 'default_checked' => true],
        2 => ['label' => '年に一回', 'unit' => '年', 'default_checked' => false]
    ];

//    const CYCLE = [
//        'MONTH' => ['value' => 1, 'label' => '月に一回', 'unit' => '月', 'default_checked' => true],
//        'YEAR' => ['value' => 2, 'label' => '年に一回', 'unit' => '年', 'default_checked' => false]
//    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public static function calculate()
    {
        $month_sum = 0;
        $user = Auth::user();
        $subscriptions = $user->subscriptions()->get();
        foreach ($subscriptions as $subscription) {
            if ($subscription->cycle_id === 1) {
                $month_sum += $subscription->price;
            } elseif ($subscription->cycle_id === 2) {
                $month_sum += $subscription->price/12;
            }
        }
        return $month_sum;
    }
}
