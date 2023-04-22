<?php

use App\Http\Controllers\ContactController;
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
    return view('home');
})->name('home');

Route::get('/{page}', function (string $page) {
    if (!view()->exists($page)) {
        abort(404);
    }

    return view($page);
})->name('page');

Route::post('/contacts-post', ContactController::class)->name('contacts.post');
