<?php

namespace App\Helpers;

use Illuminate\Support\Str;

abstract class UrlHelper
{
    /**
     * 轉換非網址之連結源自 asset()
     * @param string $config
     *
     * @return null|string
     */
    public static function formatOutPutUrl(?string $url): ?string
    {
        if (is_null($url)) {
            return null;
        }

        return filter_var($url, FILTER_VALIDATE_URL) ? $url : asset($url);
    }

    /**
     * 轉換非網址之連結源自 asset()
     * @param string $config
     *
     * @return null|string
     */
    public static function formatInputUrl(?string $url): ?string
    {
        if (is_null($url)) {
            return null;
        }

        $base_url = asset('/');

        if (filter_var($url, FILTER_VALIDATE_URL)) {
            if (Str::contains($url, $base_url)) {
                $url = self::findDiffience($url, $base_url);
            }
        } else {
            $url = asset($url);
        }

        return $url;
    }

    private static function findDiffience(string $url, $base_url): string
    {
        $len1 = strlen($url);
        $len2 = strlen($base_url);

        $diff = '';

        for ($i = 0; $i < $len1 && $i < $len2; $i++) {
            if ($url[$i] !== $base_url[$i]) {
                $diff .= substr($url, $i);
                break;
            }
        }

        if (empty($diff)) {
            $diff = substr($url, $len2);
        }

        return $diff;
    }
}
