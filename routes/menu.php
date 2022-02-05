<?php

use App\Http\Controllers\MenuItemController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'menus'], function () {
    Route::get('', [MenuItemController::class, 'index']);
    Route::get('getDT/{parent_id}/{selected?}', [MenuItemController::class, 'getDT']);
    Route::get('get/{id}', [MenuItemController::class, 'get']);
    Route::get('getTab/{id}/{tab}', [MenuItemController::class, 'getTab']);
    Route::get('add', [MenuItemController::class, 'formAdd']);
    Route::post('add', [MenuItemController::class, 'add']);
    Route::post('edit', [MenuItemController::class, 'edit']);
    Route::get('delete/{id}', [MenuItemController::class, 'delete']);
});
