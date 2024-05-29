<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

//Route::get('/', [TasksController::class, 'index']);
//Route::get('/tasks', [TasksController::class, 'index']);

Route::get('/', [TasksController::class, 'index'])->name('tasks.index');

// novi zadataka
Route::get('/tasks/create', [TasksController::class, 'create'])->name('tasks.create');

// pohrani novi zadatak
Route::post('/tasks', [TasksController::class, 'store'])->name('tasks.store');

Route::patch('/tasks/{id}', [TasksController::class, 'update'])->name('tasks.update');

Route::get('/search', [TasksController::class, 'search'])->name('tasks.search');

