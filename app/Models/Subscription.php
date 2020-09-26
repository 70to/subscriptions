<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;

class Subscription extends Model
{
    protected $guarded = [];

    protected $appends = [
        'payment_date'
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

    /**
     * @link https://www.hypertextcandy.com/laravel-primary-key-uuid
     */
    // プライマリーキーのカラム名
    protected $primaryKey = 'uuid';

    // プライマリーキーの型
    protected $keyType = 'string';

    // プライマリーキーは自動連番か？
    public $incrementing = false;

    // コンストラクタを追加
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // newした時に自動的にuuidを設定する。
        $this->attributes['uuid'] = Uuid::uuid4()->toString();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }

//    public function getPaymentDateAttribute()
//    {
//        // https://stackoverflow.com/questions/51295911/set-next-month-payment-date-with-php-carbon/51297980
//        // https://blog.capilano-fw.com/?p=867#addMonthsNoOverflow
//        $today = Carbon::today();
//        $first_bill = new Carbon($this->first_bill);
//        if ($this->cycle_id === 1) {
//            if ($first_bill > $today) {
//                return $first_bill->format('Y-m-d');
//            }
//            $diff_in_months = $first_bill->diffInMonths($today);
//            $first_bill->addMonthsNoOverflow($diff_in_months + 1);
//            $payment_date = $first_bill->format('Y-m-d');
//        } elseif ($this->cycle_id === 2) {
//            if ($first_bill >= $today) {
//                return $first_bill->format('Y-m-d');
//            }
//            $diff_in_years = $first_bill->diffInYears($today);
//            $first_bill->addYearsNoOverflow($diff_in_years + 1);
//            $payment_date = $first_bill->format('Y-m-d');
//        }
//        return $payment_date;
//    }

    /**
     * 初回支払日からサブスク支払日を求める
     */
    public function getPaymentDateAttribute()
    {
        $dt = Carbon::now();
        $today = Carbon::today();
        $first_bill = new Carbon($this->first_bill);

        if ($this->cycle_id === 1) {
            if ($first_bill->day > $today->day) {
                $dt->day = $first_bill->day;
                return $dt->format('Y-m-d');
            } elseif ($first_bill->day == $today->day) {
                return $today->format('Y-m-d');
            } elseif ($first_bill->day < $today->day) {
                $dt->day = $first_bill->day;
                $dt->addMonth();
                return $dt->format('Y-m-d');
            }
        } elseif ($this->cycle_id === 2) {
            if ($first_bill->month === $today->month && $first_bill->day === $today->day) {
                return $today->format('Y-m-d');
            }
            $diff_in_years = $first_bill->diffInYears($today);
            $first_bill->addYearsNoOverflow($diff_in_years + 1);
            return $first_bill->format('Y-m-d');
        }
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
