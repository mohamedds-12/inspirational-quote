<?php

use App\InspirationalWisdom;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Native\Laravel\Facades\Notification;

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
    return view('quote', [
        'wisdom' => InspirationalWisdom::generateOne(),
    ]);
});
