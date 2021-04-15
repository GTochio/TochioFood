<?php

use Illuminate\Support\Facades\Route;

Route::get('admin/plans/create', [App\Http\Controllers\Admin\PlanController::class, 'create'])->name('plans.create');
Route::put('admin/plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'update'])->name('plans.update');
Route::get('admin/plans/{url}/edit', [App\Http\Controllers\Admin\PlanController::class, 'edit'])->name('plans.edit');
Route::any('admin/plans/search', [App\Http\Controllers\Admin\PlanController::class, 'search'])->name('plans.search');
Route::delete('admin/plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'destroy'])->name('plans.destroy');
Route::get('admin/plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'show'])->name('plans.show');
Route::post('admin/plans', [App\Http\Controllers\Admin\PlanController::class, 'store'])->name('plans.store');
Route::get('admin/plans', [App\Http\Controllers\Admin\PlanController::class, 'index'])->name('plans.index');
Route::get('admin', [App\Http\Controllers\Admin\PlanController::class, 'index'])->name('admin.index');

Route::get('/', function () {
    return view('welcome');
});
