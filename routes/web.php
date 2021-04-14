<?php

use Illuminate\Support\Facades\Route;

Route::post('admin/plans', [App\Http\Controllers\Admin\PlanController::class, 'store'])->name('plans.store');
Route::get('admin/plans/create', [App\Http\Controllers\Admin\PlanController::class, 'create'])->name('plans.create');

Route::get('admin/plans', [App\Http\Controllers\Admin\PlanController::class, 'index'])->name('plans.index');


Route::get('/', function () {
    return view('welcome');
});
