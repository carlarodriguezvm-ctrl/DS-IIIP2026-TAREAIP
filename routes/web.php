<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EquipmentController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\RentalDetailController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'index']);
Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/employee', [EmployeeController::class, 'index']);
Route::get('/equipment', [EquipmentController::class, 'index']);
Route::get('/rental', [RentalController::class, 'index']);
Route::get('/rentaldetail', [RentalDetailController::class, 'index']);
