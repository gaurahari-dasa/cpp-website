<?php

use App\Http\Controllers\BufferController;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home/Index');
});

Route::get('/dignitaries', function () {
    return Inertia::render('Dignitaries/Index');
});

Route::get('/dignitaries/thumbnails', [BufferController::class, 'dignitaries']);

Route::get('/events', function () {
    return Inertia::render('Events/Index');
});

Route::get('/events/thumbnails', [BufferController::class, 'events']);

Route::get('/srila-prabhupada', function () {
    return Inertia::render('SrilaPrabhupada/Index');
});

Route::get('/recognitions', function () {
    return Inertia::render('Recognitions/Index');
});

Route::get('/podcasts', function () {
    return Inertia::render('Podcasts/Index');
});

Route::get('/podcasts/carousel', [BufferController::class, 'podcasts']);

Route::get('/other-contribs', function () {
    return Inertia::render('OtherContribs/Index');
});

Route::get('/highlights', function () {
    return Inertia::render('Highlights/Index');
});

Route::get('/highlights/thumbnails', [BufferController::class, 'highlights']);

Route::get('/media', function () {
    return Inertia::render('Media/Index');
});

Route::get('/media/carousel', [BufferController::class, 'media']);

Route::get('/contrib', function () {
    $take = request()->take;
    $from = request()->from;
    if ($take < 0 && !$from) {
        return ['data' => []];
    }
    if ($take < 0 && $from) {
        $from = request()->from + $take;
    }
    Log::info('take: ' . $take . ', from: ' . request()->from . '(' . $from . ')');
    $data = collect([
        ['img' => 'abc.jpg', 'title' => 'Haribol'],
        ['img' => 'def.jpg', 'title' => 'Hare Krishna'],
        ['img' => 'ghi.jpg', 'title' => 'Hare Krishna2'],
        ['img' => 'jkl.jpg', 'title' => 'Hare Krishna3'],
        ['img' => 'mno.jpg', 'title' => 'Hare Krishna4'],
        ['img' => 'pqr.jpg', 'title' => 'Hare Krishna5'],
        ['img' => 'stu.jpg', 'title' => 'Hare Krishna6'],
    ]);
    $data = [
        'data' => $data->skip($from)->take(abs($take))->values()->toArray(),
    ];
    Log::info($data);
    return $data;
});
