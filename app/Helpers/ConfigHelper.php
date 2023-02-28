<?php

namespace App\Helpers;

use Illuminate\Support\Collection;

abstract class ConfigHelper
{
    /**
     * 獲得Config設定
     * @param string $config
     *
     * @return Collection
     */
    public static function getConfig(string $config): Collection
    {
        return collect(config($config));
    }
}
