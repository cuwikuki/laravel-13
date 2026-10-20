<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\http\Controllers\QuestionController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/home-question-respon', [QuestionController::class, 'respon']);

Route::resource('pelanggan', PelangganController::class);

