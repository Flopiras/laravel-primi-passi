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
    $data = [
        'title' => 'Home',
        'dev_name' => 'Floriana'
    ];
    return view('home', $data);
});

Route::get('/next', function () {
    $data = [
        'title' => 'Next page',
        'url_image' => 'https://lumiere-a.akamaihd.net/v1/images/darth-vader-main_4560aff7.jpeg'
    ];
    return view('next', $data);
});
