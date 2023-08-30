<?php

use App\Http\Controllers\AnotherExpenseController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\CatchReceiptController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ModelPermissionController;
use App\Http\Controllers\ModelRoleController;
use App\Http\Controllers\TrashCatchReceiptsController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\userAuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RolePermissionController;
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


//  for public users
// Route::prefix('/')->group(function(){

// });


Route::prefix('cms')->middleware('guest:user')->group(function(){
    Route::get('login' , [userAuthController::class , 'showLogin'])->name('login.show');
    Route::post('login' , [UserAuthController::class , 'login']);
});


// for Admin Control
Route::prefix('cms')->middleware('auth:user')->group(function(){

    // Authentication
    Route::get('home' , [UserController::class , 'index'])->name('home');
    Route::get('logout' , [userAuthController::class , 'logout'])->name('logout');


    // Authorization
    Route::resource('roles' , RoleController::class);
    Route::post('roles-update/{id}' , [RoleController::class , 'update'])->name('roles-update');

    Route::resource('permissions' , PermissionController::class);
    Route::post('permissions-update/{id}' , [PermissionController::class , 'update'])->name('permissions-update');

    Route::resource('roles.permissions' , RolePermissionController::class);
    Route::resource('model.permissions' , ModelPermissionController::class);
    Route::resource('model.role' , ModelRoleController::class);


    // cms
    Route::resource('attachments' , AttachmentController::class);
    Route::post('attachments-update/{id}' , [AttachmentController::class , 'update'])->name('attachments-update');

    Route::resource('users' , UserController::class);
    Route::post('users-update' , [UserController::class , 'update'])->name('users-update');
    // Route::post('users-update/{id}' , [UserController::class , 'update'])->name('users-update');

    Route::resource('cars' , CarController::class);
    Route::post('cars-update/{id}' , [CarController::class , 'update'])->name('cars-update');

    Route::resource('countries' , CountryController::class);
    Route::post('countries_update/{id}' , [CountryController::class , 'update'])->name('countries_update');

    Route::resource('cities' , CityController::class);
    Route::post('cities_update/{id}' , [CityController::class , 'update'])->name('cities_update');


    Route::resource('anotherexpenses' , AnotherExpenseController::class);
    Route::post('anotherexpenses_update/{id}' , [AnotherExpenseController::class , 'update'])->name('anotherexpenses_update');

    Route::resource('catchreceipts' , CatchReceiptController::class);
    Route::post('catchreceipts_update/{id}' , [CatchReceiptController::class , 'update'])->name('catchreceipts_update');

    Route::resource('assets' , AssetController::class);
    Route::post('assets_update/{id}' , [AssetController::class , 'update'])->name('assets_update');

    Route::get('indexTrash' , [TrashCatchReceiptsController::class , 'indexTrash'])->name('TrashCatchReceipts');
    Route::get('restoreALL' , [TrashCatchReceiptsController::class , 'restoreALL'])->name('restoreALL');
    Route::get('restore/{id}' , [TrashCatchReceiptsController::class , 'restore'])->name('restore');
    Route::get('foceDeleteElement/{id}' , [TrashCatchReceiptsController::class , 'foceDeleteEle'])->name('foceDeleteElement');


});
