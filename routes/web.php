<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Create additional Routes below

Route::get('/login', [AutoController::class, 'create']) ->name('login',);

Route::post('/login', [AuthController::class, 'store']);


Route::get('/clients/add',[ClientController::class, 'create'])->middelware(['auth'])->name('clients.add');
Route:post('/clients', [ClientController::class, 'store'])->middleware(['auth']);

