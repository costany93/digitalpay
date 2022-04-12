<?php

use App\Http\Controllers\DigipayController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Http;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [DigipayController::class, 'index'])->name('digipay-index');
Route::post('/getApiUrl', [DigipayController::class, 'getApiUrl'])->name('digipay-getApiUrl');
Route::post('/ipn', [DigipayController::class, 'digipayNotification'])->name('digipay-notification');

Route::get('/digipay', function(){
    return 'yes';
})->name('digipay');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
