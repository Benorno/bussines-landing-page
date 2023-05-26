<?php

use App\Http\Controllers\AdminAppointmentController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ServicesController;
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


Route::get('/', function () {
    return view('home.index');
});

Route::get('/partner', function () {
    return view('partner.index');
})->name('partner');

Route::get('/thank-you', function () {
    return view('confirm');
})->name('thankyou');


Route::prefix('admin')->group(function () {
    Route::get('/appointments', [AdminAppointmentController::class, 'index'])->name('admin.index');
    Route::get('/appointments/search', [AdminAppointmentController::class, 'search'])->name('admin.appointments.search');
    Route::put('/appointments/{appointment}/done', [AdminAppointmentController::class, 'markAsDone'])->name('admin.appointments.markAsDone');
    Route::put('/appointments/{appointment}/canceled', [AdminAppointmentController::class, 'markAsCanceled'])->name('admin.appointments.markAsCanceled');
    Route::put('/appointments/{appointment}/pending', [AdminAppointmentController::class, 'markAsPending'])->name('admin.appointments.markAsPending');
    Route::get('/services/{service}/edit', [ServicesController::class, 'edit'])->name('services.edit');
    Route::put('/services/{service}', [ServicesController::class, 'update'])->name('services.update');
    Route::delete('/services/{service}', [ServicesController::class, 'destroy'])->name('services.destroy');
    Route::get('/services/create', [ServicesController::class, 'create'])->name('services.create');
    Route::post('/services', [ServicesController::class, 'store'])->name('services.store');
    Route::get('/services', [ServicesController::class, 'showAdmin'])->name('services.list');
});

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/appointment', [ServicesController::class, 'toAppointment'])->name('appointment');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');


