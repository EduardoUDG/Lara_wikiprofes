<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\TeacherConctroller;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('teachers', TeacherConctroller::class)->parameters(['teachers' => 'teacher'])->names('teachers');

Route::resource('comments', CommentController::class)->parameters(['comments' => 'teacher'])->names('comments');
