<?php


use Illuminate\Support\Facades\Route;

Route::group(
    ['prefix' => 'kuponify'],
    function () {
        Route::get('/login', [\A4anthony\Kuponify\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('kuponify.showLoginForm');
        Route::post('/login', '\A4anthony\Coupon\Http\Controllers\Auth\LoginController@login')->name('kuponify.login');
        //Route::get('coupon-assets', '\A4anthony\Coupon\Http\Controllers\CouponController@assets')->name('coupon.coupon_assets');
    }
);