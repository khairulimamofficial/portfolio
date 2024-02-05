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
    return view('casestudy/uat-flore-app
    ');
});

Route::get('/experience-at-iklc', function () {
    return view('activity/experience-at-iklc
    ');
});

Route::get('/building-an-application-supporting-sdgs-through-product-management', function () {
    return view('casestudy/building-an-app
    ');
});

Route::get('/software-requirements-specification-srs-case-study-to-initiate-on-building-app', function () {
    return view('casestudy/software-requirements-specification
    ');
});
Route::get('/disability-and-data-in-literaku-at-slba-yapentra', function () {
    return view('activity/disability-and-data
    ');
});

Route::get('/experiencing-as-a-computer-science-student-in-malaysia', function () {
    return view('activity/experiencing-as-a-computer-science
    ');
});


