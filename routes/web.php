<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/order_details', function () {
    return view('order_details');
});
Route::get('/suppliers', function () {
    return view('suppliers');
});
Route::get('/stock_transactions', function () {
    return view('stock_transactions');
});

