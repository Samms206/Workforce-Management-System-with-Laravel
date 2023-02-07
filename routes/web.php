<?php

use App\Http\Controllers\AttandenceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeavepermitController;
use App\Http\Controllers\SalaryController;
use App\Models\Attendance;
use App\Models\Leavepermit;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'auth']);

Route::middleware(['auth:employee,web'])->group(function () {

    Route::middleware(['must-admin'])->group(function () {
        
        Route::get('/attendences-report', [AttandenceController::class, 'index']);
        Route::get('/print-attendences', [AttandenceController::class, 'print']);

        Route::get('/employees', [EmployeeController::class, 'index']);
        Route::get('/employees-add', [EmployeeController::class, 'create']);
        Route::post('/employees', [EmployeeController::class, 'store']);
        Route::get('/employees-edit/{id}', [EmployeeController::class, 'edit']);
        Route::put('/employees/{id}', [EmployeeController::class, 'update']);
        Route::delete('/employees-delete/{id}', [EmployeeController::class, 'delete']);
        
        Route::get('/departements', [DepartementController::class, 'index']);
        Route::get('/departements-add', [DepartementController::class, 'create']);
        Route::post('/departements', [DepartementController::class, 'store']);
        Route::get('/departements/{id}', [DepartementController::class, 'show']);
        Route::get('/departements-edit/{id}', [DepartementController::class, 'edit']);
        Route::put('/departements/{id}', [DepartementController::class, 'update']);
        Route::delete('/departements-delete/{id}', [DepartementController::class, 'delete']);

        Route::get('/salarys', [SalaryController::class, 'index']); 
        Route::get('/salarys/{id}', [SalaryController::class, 'show']); 
        Route::get('/salary-add', [SalaryController::class, 'create']); 
        Route::post('/salarys', [SalaryController::class, 'store']); 
        Route::get('/salary-edit/{id}', [SalaryController::class, 'edit']); 
        Route::put('/salarys/{id}', [SalaryController::class, 'update']); 
        Route::delete('/salarys/{id}', [SalaryController::class, 'delete']); 

        Route::get('/leavepermits', [LeavepermitController::class, 'index']);
        Route::put('/leavepermits/{id}', [LeavepermitController::class, 'update']);

        
    });
    
    //home
    Route::get('/', function () {
        return view('home');
    });
    //logout
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::middleware(['must-employee',])->group(function () {
        Route::get('/attendences', [AttandenceController::class, 'create']);
        Route::post('/attendences', [AttandenceController::class, 'store']);

        Route::get('/leavepermit-add', [LeavepermitController::class, 'create']);
        Route::get('/notifycation', [LeavepermitController::class, 'notif']);
        Route::post('/leavepermits', [LeavepermitController::class, 'store']);

    });
        
});



