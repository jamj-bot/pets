<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ConsultationController;
use App\Http\Controllers\Admin\FileController;
use App\Http\Controllers\Admin\OwnerController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\SpeciesController;
use App\Http\Controllers\Admin\VetController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" and 'auth middleware group. Now create something great!
|
*/



Route::get('', [HomeController::class, 'index'])->name('admin.home');
Route::resource('/species', SpeciesController::class)->names('admin.species');
Route::resource('/owners', OwnerController::class)->names('admin.owners');
Route::resource('/vets', VetController::class)->names('admin.vets');
Route::resource('/pets', PetController::class)->names('admin.pets');
Route::resource('/consultations', ConsultationController::class)->names('admin.consultations');
Route::resource('/files', FileController::class)->names('admin.files');