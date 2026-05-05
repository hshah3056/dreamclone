<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('web-about');
Route::get('/service', [HomeController::class, 'service'])->name('web-service');
Route::get('/contact', [HomeController::class, 'contact'])->name('web-contact');

//submitQuote
Route::post('/get-quote', [QuoteController::class, 'submitQuote'])->name('quote.submit');

//Contact
Route::post('/contact-submit', [ContactController::class, 'submitContact'])->name('contact.submit');
