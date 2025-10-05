<?php

namespace App\Helpers;

class AssetUrl
{
    public static function dignitary(string $path)
    {
        if (empty($path)) {
            return '';
        }
        return asset("storage/dignitaries/{$path}");
    }
}
