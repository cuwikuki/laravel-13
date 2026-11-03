<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\http\Controllers\QuestionController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\PelangganController;
use App\Http\Controllers\Biodata1150Controller;
use App\http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/home-question-respon', [QuestionController::class, 'respon']);

Route::resource('pelanggan', PelangganController::class);

//cv

Route::get('/', function () {
    return redirect()->route('biodata1150.index');
});

Route::resource('biodata1150', Biodata1150Controller::class);
Route::get('/cv/{id}', [Biodata1150Controller::class, 'showCv'])->name('cv.show');

Route::resource('user', UserController::class);
