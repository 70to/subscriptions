<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Subscription extends Model
{
    protected $guarded = [];

    protected $appends = [
        'next_bill'
    ];

    protected $dates = [
        'first_bill'
    ];

    const CYCLE = [
        1 => ['label' => '月に一回', 'unit' => '月', 'default_checked' => true],
        2 => ['label' => '年に一回', 'unit' => '年', 'default_checked' => false]
    ];

//    const CYCLE = [
//        'MONTH' => ['value' => 1, 'label' => '月に一回', 'unit' => '月', 'default_checked' => true],
//        'YEAR' => ['value' => 2, 'label' => '年に一回', 'unit' => '年', 'default_checked' => false]
//    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

    public function getNextBillAttribute()
    {
        // https://stackoverflow.com/questions/51295911/set-next-month-payment-date-with-php-carbon/51297980
        // https://blog.capilano-fw.com/?p=867#addMonthsNoOverflow
        $today = Carbon::today();
        if ($this->cycle_id === 1) {
            $first_bill = new Carbon($this->first_bill);
            $diff_in_months = $first_bill->diffInMonths($today);
            $first_bill->addMonthsNoOverflow($diff_in_months + 1);
            $next_bill = $first_bill->format('Y-m-d');
        } elseif ($this->cycle_id === 2) {
            $first_bill = new Carbon($this->first_bill);
            $diff_in_years = $first_bill->diffInYears($today);
            $first_bill->addYearsNoOverflow($diff_in_years + 1);
            $next_bill = $first_bill->format('Y-m-d');
        }
        return $next_bill;
    }

    public static function calculate(User $user)
    {
        $month_sum = 0;
        $subscriptions = $user->subscriptions()->get();
        foreach ($subscriptions as $subscription) {
            if ($subscription->cycle_id === 1) {
                $month_sum += $subscription->price;
            } elseif ($subscription->cycle_id === 2) {
                $month_sum += $subscription->price / 12;
            }
        }
        return floor($month_sum);
    }
}
