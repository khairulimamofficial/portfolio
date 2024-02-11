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
Route::get('/home', function () {
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

Route::get('/my-work-stories', function () {
    return view('mywork
    ');
});

Route::get('/ux-camera-system-for-culture-with-augmented-reality-technology', function () {
    return view('casestudy/ux-camera-system-for-culture
    ');
});
Route::get('/flexibility-learning-management-system-through-ux-research', function () {
    return view('casestudy/flexibility-learning-system-ux
    ');
});

Route::get('/18th-csa-computer-science-anniversary-logo', function () {
    return view('casestudy/18th-csa-computer-science-anniversary-logo
    ');
});

Route::get('/think-before-you-believe-check-before-you-share-poster', function () {
    return view('casestudy/think-before-you-believe-check-before-you-share-poster
    ');
});


Route::get('/web-based-scrabble-game', function () {
    return view('casestudy/web-based-scrabble-game
    ');
});

Route::get('/implementation-of-smart-and-strategies-on-readme-application', function () {
    return view('casestudy/implementation-of-smart-and-strategies-on-readme-application
    ');
});

Route::get('/user-centered-design-for-dailypedia-daily-life-productivity-web', function () {
    return view('casestudy/user-centered-design-for-dailypedia-daily-life-productivity-web
    ');
});

Route::get('/potential-market-analysis-at-testmate', function () {
    return view('casestudy/potential-market-analysis-at-testmate
    ');
});

