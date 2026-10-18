<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/kontakt');

Route::view('/kontakt', 'kontakt');
Route::view('/leistungen', 'leistungen');
