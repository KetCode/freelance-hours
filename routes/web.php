<?php

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectsController::class, 'index'])->name('projects.index');
Route::get('/project/{project}', [ProjectsController::class, 'show'])->name('projects.show');
Route::get('/project', [ProjectsController::class, 'create'])->name('projects.create');
