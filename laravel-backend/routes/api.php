<?php

use Illuminate\Support\Facades\Route;

Route::get('/data', function () {
    return response()->json(['message' => 'Hello from Laravel']);
});