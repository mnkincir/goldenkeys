<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.home');
});

Route::get('/bergama-emlak', function () {
    return view('site.bergama-emlak');
});

Route::get('/aliaga-emlak', function () {
    return view('site.aliaga-emlak');
});

Route::get('/danismanlar', function () {
    return view('site.advisors');
});

Route::get('/hakkimizda', function () {
    return view('site.about');
});

Route::get('/subeler', function () {
    return view('site.branches');
});

Route::get('tesekkurler', function () {
    return view('site.thanks');
});
Route::post('forms/franchise-apply', [FormController::class, 'franchiseApply']);