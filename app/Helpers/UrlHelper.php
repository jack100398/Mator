<?php

namespace App\Helpers;

use Illuminate\Support\Str;

abstract class UrlHelper
{
    /**
     * 轉換非網址之連結源自 asset()
     * @param string $config
     *
     * @return string
     */
    public static function formatOutPutUrl(string $url): string
    {
        return filter_var($url, FILTER_VALIDATE_URL) ? $url : asset($url);
    }

    /**
     * 轉換非網址之連結源自 asset()
     * @param string $config
     *
     * @return string
     */
    public static function formatInputUrl(string $url): string
    {
        $base_url = asset('/');

        if (filter_var($url, FILTER_VALIDATE_URL)) {
            if (Str::contains($url, $base_url)) {
                $url = Str::diff($url, $base_url);
            }
        } else {
            $url = asset($url);
        }

        return $url;
    }
}
