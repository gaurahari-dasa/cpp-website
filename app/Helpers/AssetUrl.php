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

    public static function event(string $filename)
    {
        return self::assetUrl($filename, "events");
    }

    public static function podcast(string $filename)
    {
        return self::assetUrl($filename, "podcasts");
    }

    public static function highlight(string $filename, $year)
    {
        return self::assetUrl($filename, "highlights/{$year}");
    }

    public static function medium(string $filename)
    {
        return self::assetUrl($filename, "media");
    }

    public static function akshayaPatra(string $filename)
    {
        return self::assetUrl($filename, "akshaya-patra");
    }

    public static function aboutLife(string $filename)
    {
        return self::assetUrl($filename, "about");
    }
}
