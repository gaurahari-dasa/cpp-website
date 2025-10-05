<?php

namespace App\Http\Controllers;

use App\Helpers\AssetUrl;
use App\Models\Dignitary;
use App\Traits\ApiResponses;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BufferController extends Controller
{
    use ApiResponses;

    private static function computePickup()
    {
        $take = request()->take;
        $from = request()->from;
        if ($from < 0) {
            throw new Exception("Request parameter 'from' must not be negative, Haribol!");
        }
        if ($take < 0 && !$from) {
            return ['take' => 0, 'from' => 0];
        }
        if ($take < 0) {
            $from = request()->from + $take;
        }
        return ['take' => abs($take), 'from' => $from];
    }

    public function dignitaries()
    {
        extract(self::computePickup());
        $data = Dignitary::where('active', true)->skip($from)->take($take)->get();
        foreach ($data as $datum) {
            $datum->page_thumbnail = AssetUrl::dignitary($datum->page_thumbnail);
            $datum->details_image = AssetUrl::dignitary($datum->details_image);
        }
        return $this->ok(data: $data);
    }
}
