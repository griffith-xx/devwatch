<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class,'index'])->name('welcome.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard');
    // })->name('dashboard');
});
