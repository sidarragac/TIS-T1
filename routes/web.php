<?php

use Illuminate\Support\Facades\Route;
$homeController = 'App\Http\Controllers\HomeController@';

Route::get('/', $homeController.'index')->name('home.index');
