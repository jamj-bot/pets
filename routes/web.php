<?php

use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PetController;
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
    return view('welcome');
});


Route::get('/pets', [PetController::class, 'index'])->name('pets.index');
Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show');
Route::get('/owners/profile', [OwnerController::class, 'show' ])->name('owners.show');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
