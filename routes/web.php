<?php

use App\Http\Controllers\ComicsController;
use App\Models\Comics;
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
    $links = config('store.links');
    $foto = config('store.foto');
    return view('welcome', compact('links','foto'));
});

// Route::get('/', [ComicsController::class, "index"])->name("home");

Route::get("comics/create", [ComicsController::class, "create"]);

Route::resource("Comics", ComicsController::class);
