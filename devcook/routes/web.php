<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [CommandController::class, 'index'])->name('commands.index');
Route::get('/create', [CommandController::class, 'create'])->name('commands.create');
Route::post('/store', [CommandController::class, 'store'])->name('commands.store');
