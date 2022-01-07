<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ControllerAccesses;
use App\Http\Controllers\ControllerAccount;

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


// routes/web.php
//Auth::routes(['register' => false]);
Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/register', [ControllerAccesses::class, 'login'])->name('register');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [ControllerAccesses::class, 'allData'])->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('accesses', function () {
    return view('accesses');
})->name('accesses');

Route::middleware(['auth:sanctum', 'verified'])->post('/accesses/submit', [ControllerAccesses::class, 'submit'])->name('accesses-add');
Route::middleware(['auth:sanctum', 'verified'])->get('/accesses/delite/{id}', [ControllerAccesses::class, 'deliteAccesses'])->name('accesses-delite');
Route::middleware(['auth:sanctum', 'verified'])->get('/acceesses-update/{id}', [ControllerAccesses::class, 'updateAccesses'])->name('accesses-update');
Route::middleware(['auth:sanctum', 'verified'])->post('/acceesses-update/submit/{id}', [ControllerAccesses::class, 'SubmitupdateAccesses'])->name('submit-update');

Route::middleware(['auth:sanctum', 'verified'])->get('/access/index/{id}', [ControllerAccount::class, 'featuresAccesses'])->name('accesses-features');
Route::middleware(['auth:sanctum', 'verified'])->get('/access/add/{id}', function ($id) {
    return view('access.add', ['idparent' => $id]);
})->name('submit-features');
Route::middleware(['auth:sanctum', 'verified'])->post('/access/add/submit/{id}', [ControllerAccount::class, 'featuresAddAccount'])->name('submit-addAccount');
Route::middleware(['auth:sanctum', 'verified'])->get('/access/add/delite/{id?}/{title?}', [ControllerAccount::class, 'featuresDelite'])->name('features-delite');
