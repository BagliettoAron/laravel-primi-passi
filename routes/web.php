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
    $data = [
        'contacts',
        'download',
        'mission',
    ];
    return view('landingPage', $data);
})->name('landingPage');

Route::get('work-for-us', function(){
    $data = [
        'employees' => [
        'CEO' => 'Elon Musk',
        'President & OP Director' => 'Gwynne Shotwell',
        'Attendant' => 'Jeff Bezos',
        ]
    ];
    return view('contacts', $data);
})->name('contacts');

Route::get('support', function(){
    return view('download');
}) -> name('download');

Route::get('enterpriseMotivation', function(){
    return view('mission');
})-> name('mission');

