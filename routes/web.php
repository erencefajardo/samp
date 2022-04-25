<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', [EmployeeController:: class, 'index'])->name('list');
Route::get('add', [EmployeeController:: class, 'create']);
Route::post('adding', [EmployeeController:: class, 'store']);
Route::get('view-record/{id}', [EmployeeController:: class, 'show']);
Route::get('edit-record/{id}', [EmployeeController:: class, 'edit']);
Route::post('update-record/{id}', [EmployeeController:: class, 'update']);
Route::get('delete-record/{id}', [EmployeeController:: class, 'destroy']);