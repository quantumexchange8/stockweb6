<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/social-governance-and-responsibility', function () {
    return view('sgr');
});

Route::get('/portfolio-management', function () {
    return view('portfolio-management');
});

Route::get('/investment-management', function () {
    return view('investment-management');
});


Route::get('/stockbroking-services', function () {
    return view('stockbroking-services');
});


Route::get('/income-investing', function () {
    return view('income-investing');
});


Route::get('/investment-bonds', function () {
    return view('investment-bonds');
});

Route::get('/retirement-planning', function () {
    return view('retirement-planning');
});

Route::get('/estate-and-trust-planning', function () {
    return view('estate-and-trust-planning');
});

Route::get('/customised-strategies', function () {
    return view('customised-strategies');
});

Route::get('/sustainable-investment', function () {
    return view('sustainable-investment');
});

Route::get('/financial-data-analysis', function () {
    return view('financial-data-analysis');
});

Route::get('/faq', function () {
    return view('faq');
});


Route::get('/contactus', function () {
    return view('contactus');
});