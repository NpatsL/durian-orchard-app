<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\LotMaterialController;
use App\Http\Controllers\TaskController;
//use App\Http\Controllers\FinanceController;
// use App\Models\Employee;
use App\Models\Material;
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
Route::get('/', function () {
    return view('login');
});
Route::get('welcome', [PlanController::class, 'index']);

Route::get('/plans', [PlanController::class, 'index'])
    ->name('plans.index');

Route::get('/materials', [MaterialController::class, 'index'])
    ->name('materials.index');
 


// Route::get('/users', function () {
//     return view('users.index');
// })->name('users.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/materials', [UserController::class, 'index'])->name('materials.index');
Route::get('/finances', [UserController::class, 'index'])->name('finances.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
