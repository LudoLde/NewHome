<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Models\House;
use App\Models\User;

Route::prefix('/house')->name('house.')->group(function(){
    Route::get('/', [HouseController::class, 'index'])->name('index');
    Route::get('/new', [HouseController::class, 'create'])->name('create');
    Route::post('/new', [HouseController::class, 'store'])->name('store');
    Route::get('/edit/{house}', [HouseController::class, 'edit'])->name('edit');
    Route::post('/edit/{house}', [HouseController::class, 'update'])->name('update');
    Route::get('/delete/{house}', [HouseController::class, 'destroy'])->name('delete');
});

Route::prefix('/api')->name('api')->group(function(){
    Route::get('/', [ApiController::class, 'show']);
    Route::post('/new', [ApiController::class, 'store']);
    Route::put('/edit/{house}', [ApiController::class, 'update']);
    Route::delete('/delete/{house}', [ApiController::class, 'destroy']);
});

Route::prefix('/user')->name('user.')->group(function(){
    Route::get('/new', [UserController::class, 'create'])->name('create');
    Route::post('/new', [UserController::class, 'store'])->name('store');
    Route::get('/edit/{user}', [UserController::class, 'edit'])->name('edit');
    Route::post('/edit/{user}', [UserController::class, 'update'])->name('update');
});

Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'doLogin'])->name('doLogin');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
