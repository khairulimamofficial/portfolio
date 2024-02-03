<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home
    ');
});

Route::get('/uat-flore-app', function () {
    return view('uat-flore-app
    ');
});

Route::get('/experience-at-iklc', function () {
    return view('experience-at-iklc
    ');
});

Route::get('/building-an-application-supporting-sdgs-through-product-management', function () {
    return view('building-an-app
    ');
});
