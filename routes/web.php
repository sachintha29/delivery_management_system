<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeliveryRequestController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [DeliveryRequestController::class, 'index'])->name('deliveries.index');
Route::get('/delivery-request/create', [DeliveryRequestController::class, 'create'])->name('deliveries.create');
Route::post('/delivery-requests', [DeliveryRequestController::class, 'store'])->name('deliveries.store');
Route::delete('/delivery-requests/{deliveryrequest}', [DeliveryRequestController::class, 'destroy'])->name('deliveries.destroy');
Route::get('/delivery-requests/{deliveryrequest}/edit', [DeliveryRequestController::class, 'edit'])->name('deliveries.edit');
Route::put('/delivery-requests/{deliveryrequest}', [DeliveryRequestController::class, 'update'])->name('deliveries.update');
