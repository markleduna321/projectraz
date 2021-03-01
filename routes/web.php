<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/search', [App\Http\Controllers\PurchaseController::class, 'search'])->name('search');
Route::get('/searchacc', [App\Http\Controllers\AcceptController::class, 'searchacc'])->name('searchacc');
Route::get('/searchcurr', [App\Http\Controllers\ReqcurrentController::class, 'searchcurr'])->name('searchcurr');
Route::get('contact', 'ContactFormController@create')->name('contact.create');//Route::view('page', 'content page/phpHTML');
Route::post('contact', 'ContactFormController@store')->name('contact.store');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    Route::resource('inventory', InventoryController::class);
    Route::resource('purchase', PurchaseController::class);
    Route::resource('accept', AcceptController::class);
    Route::resource('reqcurrent', ReqcurrentController::class);
    Route::resource('account', AccountController::class);
    Route::resource('reports', ReportController::class);
});


