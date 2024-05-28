<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $data = ['key' => 'value']; // Define $data
    return Inertia::render('Home');
});