<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\orm_exe;
use App\Http\Controllers\top;

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
    return view('welcome');
});

Route::get('/test/{param?}', [orm_exe::class, 'showPage']);
Route::get('/top', [top::class, 'showPage']);

