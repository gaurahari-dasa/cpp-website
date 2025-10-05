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

Route::get('/srila-prabhupada', function () {
    return Inertia::render('SrilaPrabhupada/Index');
});

Route::get('/recognitions', function () {
    return Inertia::render('Recognitions/Index');
});

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
