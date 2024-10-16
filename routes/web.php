<?php

use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return "The Vinyl Shop";
});
*/

/*
Route::get('contact', function () {
    return view('contact');
});
*/

Route::view('/', 'home')->name('home');

Route::view('contact', 'contact')->name('contact');

Route::view('playground', 'playground')->name('playground');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('records', function () {
        $records = [
            'Queen - Greatest Hits',
            'The Rolling Stones - Sticky Fingers',
            'The Beatles - Abbey Road'
        ];
        return view('admin.records.index', [
            'records' => $records
        ]);
    })->name('records');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
