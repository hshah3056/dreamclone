<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

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


Route::get('/manual-sitemap-generate', function (Request $request) {

    // 1. Security Check: Require a secret password in the URL
    $secretKey = 'dreamclone2026'; // Change this to anything you want!

    if ($request->query('key') !== $secretKey) {
        abort(403, 'Unauthorized access.');
    }

    // 2. Run the Generator
    try {
        SitemapGenerator::create('https://dreamclone.in')
            ->writeToFile(public_path('sitemap.xml'));

        return 'Success! Sitemap has been generated and saved to the public folder.';
    } catch (\Exception $e) {
        return 'Error generating sitemap: ' . $e->getMessage();
    }
});
