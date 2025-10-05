<?php

namespace App\Http\Controllers;

use App\Models\Dignitaries;
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
            throw new Exception("Cannot pickup data from a negative position, Haribol!");
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
        Log::info(['take', $take, 'from', $from]);
        $data = Dignitaries::skip($from)->take($take)->get();
        foreach ($data as $datum) {
            $datum->page_thumbnail = asset("storage/{$datum->page_thumbnail}");
        }
        return $this->ok(data: $data);
    }
}
