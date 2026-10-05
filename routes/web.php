<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/home', [HomeController::class, 'index']);
use Illuminate\Http\Request;

Route::post('/auth/login', function (Request $request) {
    $username = $request->input('username');
    return 'Username yang berhasil dikirim adalah: ' . $username;
});
use App\Http\Controllers\QuestionController;

Route::post('/question/store', [QuestionController::class, 'store'])->name('question.store');
