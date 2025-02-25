<?php

use Illuminate\Support\Facades\Route;

$homeController = 'App\Http\Controllers\HomeController@';
$productController = 'App\Http\Controllers\ProductController@';

Route::get('/', $homeController.'index')->name('home.index');

Route::get('/products', $productController.'index')->name('product.index');
Route::get('/products/create', $productController.'create')->name('product.create');
Route::post('/products/save', $productController.'save')->name('product.save');
