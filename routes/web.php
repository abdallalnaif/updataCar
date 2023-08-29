<?php

use App\Http\Controllers\AnotherExpenseController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\CatchReceiptController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\TrashCatchReceiptsController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AttachmentController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\MediaManController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('cms/admin', function () {
    return view('cms.parent');
});


Route::prefix('cms/')->group(function(){
    // ahmed
    Route::resource('accountants' , AccountantController::class);
    Route::post('accountants-update/{id}' , [AccountantController::class , 'update'])->name('accountants-update');

    Route::resource('admins' , AdminController::class);
    Route::post('admins-update/{id}' , [AdminController::class , 'update'])->name('admins-update');

    Route::resource('attachments' , AttachmentController::class);
    Route::post('attachments-update/{id}' , [AttachmentController::class , 'update'])->name('attachments-update');

    Route::resource('customers' , CustomerController::class);
    Route::post('customers-update/{id}' , [CustomerController::class , 'update'])->name('customers-update');

    Route::resource('employees' , EmployeeController::class);
    Route::post('employees-update/{id}' , [EmployeeController::class , 'update'])->name('employees-update');

    Route::resource('investors' , InvestorController::class);
    Route::post('investors-update/{id}' , [InvestorController::class , 'update'])->name('investors-update');

    Route::resource('media_men' , MediaManController::class);
    Route::post('media_men-update/{id}' , [MediaManController::class , 'update'])->name('media_men-update');

    Route::resource('users' , UserController::class);
    Route::post('users-update/{id}' , [UserController::class , 'update'])->name('users-update');


    // abed
    Route::view('/' , 'cms/parent')->name('parent');
    Route::view('/temp' , 'cms/temp');

    Route::resource('countries' , CountryController::class);
    Route::post('countries_update/{id}' , [CountryController::class , 'update'])->name('countries_update');
    // Route::view('countries' , 'cms.country.index');

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

    // Route::resource('viewers' , ViewerController::class);
    // Route::post('viewers_update/{id}' , [ViewerController::class , 'update'])->name('viewers_update');


    // Route::resource('categories' , CategoryController::class);
    // Route::post('categories_update/{id}' , [CategoryController::class , 'update'])->name('categories_update');

    // Route::resource('articales' , ArticaleController::class);
    // Route::post('articales_update/{id}' , [ArticaleController::class , 'update'])->name('articales_update');



    // omar

    Route::resource('cars' , CarController::class);
    Route::post('cars-update/{id}' , [CarController::class , 'update'])->name('cars-update');

});
