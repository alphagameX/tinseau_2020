<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SearchController;

use Illuminate\Support\Facades\Auth;
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


Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/prestation/{slug}', [PageController::class, 'prestation'])->name('prestation');
Route::post('/search', [SearchController::class, 'getArticle'])->name('search');
Route::get('/news/{id}', [PageController::class, 'news'])->name('news');

Route::get('/circuit', [PageController::class, 'circuits'])->name('circuits');
Route::get('/circuit/{slug?}', [PageController::class, 'circuit'])->name('circuit');

Route::get('evenement', [PageController::class, 'events'])->name('events');
Route::get('evenement/{id}', [PageController::class, 'event'])->name('event');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::post('upload-custom', [AdminController::class, 'upload'])->name('upload')->middleware('auth');
    Route::get('settings-field', [AdminController::class, 'settingsField'])->name('settingsField')->middleware('auth');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
