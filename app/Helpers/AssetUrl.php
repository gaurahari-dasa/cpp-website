<?php

namespace App\Helpers;

class AssetUrl
{
    private static function assetUrl(string $filename, string $folder)
    {
        if (empty($filename)) {
            return '';
        }
        return asset("storage/{$folder}/{$filename}");
    }

    public static function dignitary(string $filename)
    {
        return self::assetUrl($filename, "dignitaries");
    }

    public static function podcast(string $filename)
    {
        return self::assetUrl($filename, "podcasts");
    }

    public static function highlight(string $filename, $year)
    {
        return self::assetUrl($filename, "highlights/{$year}");
    }
}
