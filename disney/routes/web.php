<?php

use App\Http\Controllers\DisneyController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

Route::get('/disneys', [DisneyController::class, 'index']);

Route::get('/disneys/create', [DisneyController::class, 'store']);

Route::get('/disneys/{id}', [DisneyController::class, 'show']);

Route::post('/disneys', [DisneyController::class, 'create']);

Route::get('/disneys/{id}/edit', [DisneyController::class, 'edit']);

Route::patch('/disneys/{id}', [DisneyController::class, 'update']);

Route::delete('/disneys/{id}/delete', [DisneyController::class, 'delete']);
