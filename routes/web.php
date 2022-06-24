<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\DashboardController;

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

route::get('/', [HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('redirect', [HomeController::class,'redirect']);     //admin.home

//categories
route::get('/view_categories', [AdminController::class,'view_categories']);

route::post('/add_categories', [AdminController::class,'add_categories']);

route::get('/delete_categories/{id}', [AdminController::class,'delete_categories']);

route::get('/show_categories/{id}', [AdminController::class,'show_categories']);

route::get('/update_categories/{id}', [AdminController::class,'update_categories']);

route::get('/update_categories_confirm/{id}', [AdminController::class,'update_categories_confirm']);


//recipes
route::get('/view_recipe', [AdminController::class,'view_recipe']);

route::post('/add_recipe', [AdminController::class,'add_recipe']);

route::get('/show_recipe', [AdminController::class,'show_recipe']);

route::get('/delete_recipe/{id}', [AdminController::class,'delete_recipe']);

route::get('/update_recipe/{id}', [AdminController::class,'update_recipe']);

route::post('/update_recipe_confirm/{id}', [AdminController::class,'update_recipe_confirm']);


//status
route::get('/view_status', [AdminController::class,'view_status']);

route::post('/add_status', [AdminController::class,'add_status']);

route::get('/delete_status/{id}', [AdminController::class,'delete_status']);

route::get('/show_status/{id}', [AdminController::class,'show_status']);

route::get('/update_status/{id}', [AdminController::class,'update_status']);

route::get('/update_status_confirm/{id}', [AdminController::class,'update_status_confirm']);


//members
route::get('/view_member', [AdminController::class,'view_member']);

route::post('/add_member', [AdminController::class,'add_member']);

route::get('/show_member', [AdminController::class,'show_member']);

route::get('/delete_member/{id}', [AdminController::class,'delete_member']);

route::get('/update_member/{id}', [AdminController::class,'update_member']);

route::post('/update_member_confirm/{id}', [AdminController::class,'update_member_confirm']);