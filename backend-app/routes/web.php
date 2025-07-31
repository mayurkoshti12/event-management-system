<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EventAdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/events', [EventAdminController::class, 'index'])->name('admin.events.index');
    Route::get('/admin/events/create', [EventAdminController::class, 'create'])->name('admin.events.create');
    Route::post('/admin/events', [EventAdminController::class, 'store'])->name('admin.events.store');
    Route::get('/admin/events/{event}/edit', [EventAdminController::class, 'edit'])->name('admin.events.edit');
    Route::put('/admin/events/{event}', [EventAdminController::class, 'update'])->name('admin.events.update');
    Route::delete('/admin/events/{event}', [EventAdminController::class, 'destroy'])->name('admin.events.destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
