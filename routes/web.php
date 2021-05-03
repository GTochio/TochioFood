<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ACL\ProfileController;


Route::prefix('admin')
        ->namespace('Admin')
        ->middleware('auth')
        ->group(function(){

    //
    //Routes Plan X Profile
    
    Route::get('plans/{id}/profile/{idProfile}/detach',[App\Http\Controllers\Admin\ACL\PlanProfileController::class, 'detachPlanProfile'])->name('plans.profile.detach');
    Route::post('plans/{id}/profiles/store',[App\Http\Controllers\Admin\ACL\PlanProfileController::class, 'attachprofilesProfile'])->name('plans.profiles.attach');
    Route::any('plans/{id}/profiles/create',[App\Http\Controllers\Admin\ACL\PlanProfileController::class, 'profilesAvailable'])->name('plans.profiles.available');
    Route::get('plans/{id}/profiles',[App\Http\Controllers\Admin\ACL\PlanProfileController::class, 'profiles'])->name('plans.profiles');
    Route::get('profiles/{id}/plans',[App\Http\Controllers\Admin\ACL\PlanProfileController::class, 'plans'])->name('profiles.plans');


    
    //Routes Permission X Profile
    Route::post('profiles/{id}/permissions/store',[App\Http\Controllers\Admin\ACL\PermissionProfileController::class, 'attachPermissionsProfile'])->name('profile.permissions.attach');
    Route::any('profiles/{id}/permissions/create',[App\Http\Controllers\Admin\ACL\PermissionProfileController::class, 'permissionsAvailable'])->name('profile.permissions.available');
    Route::get('profiles/{id}/permissions',[App\Http\Controllers\Admin\ACL\PermissionProfileController::class, 'permissions'])->name('profile.permissions');
    Route::get('profiles/{id}/permissions/{idPermission}/detach',[App\Http\Controllers\Admin\ACL\PermissionProfileController::class, 'detachPermissionsProfile'])->name('profile.permissions.detach');
    Route::get('permissions/{id}/profiles',[App\Http\Controllers\Admin\ACL\PermissionProfileController::class, 'profiles'])->name('permissions.profiles');
    
    





    //Routes permissions
      
    Route::any('permissions/search', [App\Http\Controllers\Admin\ACL\PermissionController::class, 'search'])->name('permission.search');
    Route::get('permissions',[App\Http\Controllers\Admin\ACL\PermissionController::class, 'index'])->name('permission.index');
    Route::get('permissions/create',[App\Http\Controllers\Admin\ACL\PermissionController::class, 'create'])->name('permission.create');
    Route::post('permissions/store',[App\Http\Controllers\Admin\ACL\PermissionController::class, 'store'])->name('permission.store');
    Route::get('permissions/{id}/edit', [App\Http\Controllers\Admin\ACL\PermissionController::class, 'edit'])->name('permission.edit');
    Route::put('permissions/{id}', [App\Http\Controllers\Admin\ACL\PermissionController::class, 'update'])->name('permission.update');
    Route::get('permissions/{id}/show',[App\Http\Controllers\Admin\ACL\PermissionController::class, 'show'])->name('permission.show');
    Route::delete('permissions/{id}', [App\Http\Controllers\Admin\ACL\PermissionController::class, 'destroy'])->name('permission.destroy');
    



    //Routes Profiles
      
    Route::any('profiles/search', [App\Http\Controllers\Admin\ACL\ProfileController::class, 'search'])->name('profile.search');
    Route::get('profiles',[App\Http\Controllers\Admin\ACL\ProfileController::class, 'index'])->name('profile.index');
    Route::get('profiles/create',[App\Http\Controllers\Admin\ACL\ProfileController::class, 'create'])->name('profile.create');
    Route::post('profiles/store',[App\Http\Controllers\Admin\ACL\ProfileController::class, 'store'])->name('profile.store');
    Route::get('profiles/{id}/edit', [App\Http\Controllers\Admin\ACL\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('profiles/{id}', [App\Http\Controllers\Admin\ACL\ProfileController::class, 'update'])->name('profile.update');
    Route::get('profiles/{id}/show',[App\Http\Controllers\Admin\ACL\ProfileController::class, 'show'])->name('profile.show');
    Route::delete('profiles/{id}', [App\Http\Controllers\Admin\ACL\ProfileController::class, 'destroy'])->name('profile.destroy');
    
   // };



    //Routes Details Plans

    Route::post('plans/{url}/details',[App\Http\Controllers\Admin\DetailPlanController::class, 'store'])->name('details.plan.store');
    Route::get('plans/{url}/details/create',[App\Http\Controllers\Admin\DetailPlanController::class, 'create'])->name('details.plan.create');
    Route::get('plans/{url}/details/{idPlan}/edit',[App\Http\Controllers\Admin\DetailPlanController::class, 'edit'])->name('details.plan.edit');
    Route::delete('plans/{url}/details/{idPlan}',[App\Http\Controllers\Admin\DetailPlanController::class, 'destroy'])->name('details.plan.destroy');
    Route::get('plans/{url}/details/{idPlan}',[App\Http\Controllers\Admin\DetailPlanController::class, 'show'])->name('details.plan.show');
    Route::put('plans/{url}/details/{idPlan}',[App\Http\Controllers\Admin\DetailPlanController::class, 'update'])->name('details.plan.update');
    Route::get('plans/{url}/details',[App\Http\Controllers\Admin\DetailPlanController::class, 'index'])->name('details.plan.index');

// Routes Plans

    Route::get('plans/create', [App\Http\Controllers\Admin\PlanController::class, 'create'])->name('plans.create');
    Route::put('plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'update'])->name('plans.update');
    Route::get('plans/{url}/edit', [App\Http\Controllers\Admin\PlanController::class, 'edit'])->name('plans.edit');
    Route::any('plans/search', [App\Http\Controllers\Admin\PlanController::class, 'search'])->name('plans.search');
    Route::delete('plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'destroy'])->name('plans.destroy');
    Route::get('plans/{url}', [App\Http\Controllers\Admin\PlanController::class, 'show'])->name('plans.show');
    Route::post('plans', [App\Http\Controllers\Admin\PlanController::class, 'store'])->name('plans.store');
    Route::get('plans', [App\Http\Controllers\Admin\PlanController::class, 'index'])->name('plans.index');
    Route::get('/', [App\Http\Controllers\Admin\PlanController::class, 'index'])->name('admin.index');
       

});

    Route::get('/',[App\Http\Controllers\Site\SiteController::class, 'index']);


// Rotas de Autenticação 

   // Auth::routes();

