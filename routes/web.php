<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\TaxCalculatorController;

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
Route::any('/tax-calculator', [TaxCalculatorController::class, 'index']);
Route::post('/tax-calculator/calculate-tax', [TaxCalculatorController::class, 'calculateTax'])->name('calculate.tax');

//admin-page.blade.php
Route::get('/admin-page', [TaxCalculatorController::class, 'adminPage'])->name('admin.page');
Route::post('/tax-rates/store', [TaxCalculatorController::class, 'store'])->name('tax-rates.store');
Route::put('/tax-rates/{id}', [TaxCalculatorController::class, 'update'])->name('tax-rates.update');

Route::delete('/tax-rates/delete/{id}', [TaxCalculatorController::class, 'destroy'])->name('tax-rates.destroy');
