<?php

use App\Http\Controllers\ParticipantController;
use Illuminate\Support\Facades\Route;

Route::post('/participants', [ParticipantController::class, 'store']);
Route::get('/participants/{id}', [ParticipantController::class, 'show']);
