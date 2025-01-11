<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/products', function () {
    $products = Product::all(); // Get all products from the database
    return view('products', compact('products')); // Pass products to Blade view
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

