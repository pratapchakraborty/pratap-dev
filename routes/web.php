<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'frontend.pages.home')->name('home');

Route::view('/portfolio', 'frontend.pages.portfolio')->name('portfolio');

Route::view('/hire-me', 'frontend.pages.hire-me')->name('hire');

Route::view('/terms', 'frontend.pages.terms')->name('terms');
