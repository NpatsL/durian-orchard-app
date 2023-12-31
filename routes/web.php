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

Route::resource('/material', MaterialController::class);
Route::resource('/lot', LotMaterialController::class);
Route::get('welcome', [PlanController::class, 'index']);

Route::get('/plans', [PlanController::class, 'index'])
    ->name('plans.index');

Route::get('/materials', [MaterialController::class, 'index'])
    ->name('materials.index');



// Route::get('/users', function () {
//     return view('users.index');
// })->name('users.index');
Route::get('/dashboard', [PlanController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/materials', [MaterialController::class, 'index'])->name('materials.index');
Route::get('/finances', [FinanceController::class, 'index'])->name('finances.index');

Route::get('/finances/income', [IncomeController::class, 'index'])->name('finances.income.index');
Route::get('/finances/expense', [ExpenseController::class, 'index'])->name('finances.expense.index');

Route::get('/finances/income/create', [IncomeController::class, 'create'])->name('finances.income.create');
Route::get('/finances/expense/create', [ExpenseController::class, 'create'])->name('finances.expense.create');

Route::post('finances/income', [IncomeController::class, 'store'])->name('finances.income.store');
Route::post('finances/expense', [ExpenseController::class, 'store'])->name('finances.expense.store');

Route::put('/finances/income/{income}', [IncomeController::class, 'update'])->name('finances.income.update');
Route::put('/finances/expense/{expense}', [ExpenseController::class, 'update'])->name('finances.expense.update');

Route::get('finances/income/{income}/edit', [IncomeController::class, 'edit'])->name('finances.income.edit');
Route::get('finances/expense/{expense}/edit', [ExpenseController::class, 'edit'])->name('finances.expense.edit');

Route::delete('/finances/income/{income}', [IncomeController::class, 'destroy'])->name('finances.income.destroy');
Route::delete('/finances/expense/{expense}', [ExpenseController::class, 'destroy'])->name('finances.expense.destroy');

Route::get('/finances/{type}/show', [FinanceController::class, 'show'])
    ->name('finances.show');

Route::get('/plans', [PlanController::class, 'index'])
    ->name('plans.index');
Route::post('/plans/create', [PlanController::class, 'create'])
    ->name('plans.create');
Route::put('/plans/task/{task}', [TaskController::class, 'status'])
    ->name('task.status');
Route::get('/plans/task/edit/{task}', [TaskController::class, 'edit'])
    ->name('task.edit');
Route::put('/plans/task/update/{task}', [TaskController::class, 'update'])
    ->name('task.update');
Route::put('/plans/assign/{task}', [TaskController::class, 'assign'])
    ->name('task.assign');





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
