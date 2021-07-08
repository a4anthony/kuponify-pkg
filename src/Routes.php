<?php


use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'kuponify'],
    function () {
        Route::get('', [\A4anthony\Kuponify\Http\Controllers\KuponifyController::class, 'dashboard'])->name('kuponify.dashboard');
        Route::get('assets', [\A4anthony\Kuponify\Http\Controllers\KuponifyController::class, 'assets'])->name('kuponify.assets');
        Route::get('/login', [\A4anthony\Kuponify\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('kuponify.showLoginForm');
        Route::post('/login', [\A4anthony\Kuponify\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('kuponify.login');
        Route::get('/get-types', [\A4anthony\Kuponify\Http\Controllers\KuponifyController::class, 'getTypes'])->name('kuponify.getTypes');
    }
);