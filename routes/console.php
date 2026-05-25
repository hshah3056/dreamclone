<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Spatie\Sitemap\SitemapGenerator;

Schedule::call(function () {
    SitemapGenerator::create('https://dreamclone.in')
        ->writeToFile(public_path('sitemap.xml'));
})->daily();

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
