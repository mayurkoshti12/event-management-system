<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\EventController;


Route::get('/ping', function () {
    return response()->json([
        'message' => 'pong',
        'status' => 'success'
    ]);
});

Route::apiResource('events', EventController::class);

