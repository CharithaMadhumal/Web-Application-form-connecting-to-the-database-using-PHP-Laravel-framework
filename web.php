<?php

use App\Http\Controllers\ChildController;
use App\Models\Child;
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
    return view('welcome');
});

Route::get('/StudentSavePage', function () {
    return view('index');
});


Route::controller(ChildController::class)->group(function () {
    Route::get('/AddChild', 'AddChild');
    Route::post('/saveChild', 'save')->name('children.save');
  
});
