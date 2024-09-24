<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VehicleController;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/registrar-motorista', [UserController::class,'users'])->name('users-register');
Route::post('/registrar', [UserController::class, 'users_action'])->name('user.action');

Route::get('/cadastra-veiculo', [VehicleController::class, 'vehicle'])->name('vehicle-register');
Route::post('/cadastrar', [VehicleController::class, 'vehicle_action'])->name('vehicle.action');
