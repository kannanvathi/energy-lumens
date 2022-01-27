<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProductController;
use App\Http\controllers\LandingController;
use App\Http\controllers\UsersController;
use App\Http\controllers\RolesController;
use App\Http\controllers\CareerController;


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
    return Redirect::to('products');
});

/*Route::view('/home', 'welcome');*/

Route::get('/home', [LandingController::class, 'getProducts']);

/*return view('welcome');*/
Auth::routes();

/*Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/get-enquire', [EnquiryController::class, 'getEnquiryData'])->name('getEnquiryData');
    Route::resource('roles', RolesController::class);
    Route::resource('users', UsersController::class);
    Route::resource('products', ProductController::class);
    Route::resource('careers', CareerController::class);
});

Route::post('/store-enquiry', [EnquiryController::class, 'saveData'])->name('enquiryStore');


/*Route::get('/get-enquire', 'EnquiryController@getEnquiryData');*/



/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
