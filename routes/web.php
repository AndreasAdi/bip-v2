<?php

use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [MainController::class, "index"]);
Route::get('/katalog', [MainController::class, "katalog"]);
Route::get('/about', [MainController::class, "about"]);
Route::get('/award', [MainController::class, "award"]);
Route::get('/ceo-statement', [MainController::class, "ceoStatement"]);

Route::get('/banking', [MainController::class, "bankingIndex"]);
Route::get('/banking/list/{id}', [MainController::class, "bankingList"]);

Route::get('/it', [MainController::class, "itIndex"]);
Route::get('/it/list/{id}', [MainController::class, "itList"]);

Route::get('/office', [MainController::class, "officeIndex"]);

Route::get('/machine', [MainController::class, "machineIndex"]);

Route::get('/product/{id}', [MainController::class, "productDetail"]);
