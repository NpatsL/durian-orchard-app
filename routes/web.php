<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\FinanceController;
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
Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/finances', [FinanceController::class, 'index'])->name('finances.index');
Route::get('/finances/income', [IncomeController::class, 'index'])->name('finances.income.index');
Route::get('/finances/expense', [ExpenseController::class, 'index'])->name('finances.expense.index');
Route::get('/finances/income/create', [IncomeController::class, 'create'])->name('finances.income.create');
Route::get('/finances/expense/create', [ExpenseController::class, 'create'])->name('finances.expense.create');
Route::put('/finances/income/{income}', [IncomeController::class, 'update'])->name('finances.income.update');
Route::put('/finances/expense/{expense}', [ExpenseController::class, 'update'])->name('finances.expense.update');
// Route::get('/finances/income', [IncomeController::class, 'store'])->name('finances.income.index');
// Route::resource('finances/income', IncomeController::class);
Route::get('finances/income/{income}/edit', [IncomeController::class, 'edit'])->name('finances.income.edit');
Route::get('finances/expense/{expense}/edit', [ExpenseController::class, 'edit'])->name('finances.expense.edit');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
