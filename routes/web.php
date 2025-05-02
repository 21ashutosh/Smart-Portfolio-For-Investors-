<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);
// Route::get('/register', [PageController::class, 'register'])->name('register');
// Route::post('/register-submit', [PageController::class, 'registerSubmit'])->name('register.submit');
Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/market-trends', [PageController::class, 'marketTrends'])->name('market.trends');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/ai-recommendations', [PageController::class, 'aiRecommendation'])->name('ai.recommendations');
Route::get('/login', [PageController::class, 'login'])->name('login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
