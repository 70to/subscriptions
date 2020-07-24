<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $guarded = [];

    const CIRCLE = [
        1 => ['label' => '月に一回', 'default_checked' => true],
        2 => ['label' => '年に一回', 'default_checked' => false]
    ];
}
