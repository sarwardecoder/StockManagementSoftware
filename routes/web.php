<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/employee', function () {
    return view('employee');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/sales', function () {
    return view('sales');
});
