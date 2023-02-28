<?php

namespace App\Helpers;

use Carbon\Carbon;

abstract class TimeHelper
{
    /**
     * 獲得Config設定
     * @param string $config
     *
     * @return Collection
     */
    public static function formatjnFY(string $date): string
    {
        return str_replace(['-'], [' '], Carbon::parse($date)->format('j-n F Y'));
    }
}
