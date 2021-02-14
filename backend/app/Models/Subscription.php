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

    const MONTH_CYCLE = 1;

    const YEAR_CYCLE = 2;

    const CYCLE = [
        self::MONTH_CYCLE => ['label' => '月に一回', 'unit' => '月', 'default_checked' => true],
        self::YEAR_CYCLE => ['label' => '年に一回', 'unit' => '年', 'default_checked' => false]
    ];

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
}
