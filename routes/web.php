<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\flightController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/slider', function () {
    return view('slider');
});
Route::get('/signup', function () {
    return view('register.signup')->name('signup');
});
Auth::routes();
Route::get('/', [flightController::class, 'index'])->name('index');
Route::get('/newcars', [StoreController::class, 'create'])->name('car.create');
Route::post('newcars/create', [StoreController::class, 'store'])->name('car.store');
Route::get('/signup', [RegisterController::class, 'signup'])->name('register.signup');
Route::get('/login', [RegisterController::class, 'login'])->name('register.login');
Route::post('/signup-user', [RegisterController::class, 'registerUser'])->name('register-user');
Route::post('/login', [RegisterController::class, 'loginAdmin'])->name('login-admin');
Route::get('/dashboard', [flightController::class, 'showCars'])->middleware('isLoggedIn')->name('k');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
// Route::get('/admin/home', [RegisterController::class,'admin'])->middleware('is_admin');;
Route::get('/admind', [flightController::class, 'showCars'])->middleware('isLoggedIn')->name('k');

Route::get('/cars/purchase/{carId}', [CarController::class, 'purchaseCar'])
    ->name('cars.purchase')->middleware('isLoggedIn');
Route::get('/user/{id}/profile', [UserController::class, 'showUserProfile'])->name('user.profile')->middleware('isLoggedIn');
