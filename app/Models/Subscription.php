<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];

    const CYCLE = [
        1 => ['label' => '月に一回', 'unit' => '月', 'default_checked' => true],
        2 => ['label' => '年に一回', 'unit' => '年', 'default_checked' => false]
    ];

    public function service()
    {
        return $this->belongsTo('App\Models\Service');
    }
}
