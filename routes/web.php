<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;


require 'menu.php';

Route::get('/lang/{locale}', function ($locale) {

    Session::put('language', $locale);

    return redirect()->back();

})->name('lang');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
