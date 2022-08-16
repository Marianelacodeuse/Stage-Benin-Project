<?php

// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
// Route::get('/home', [HomeController::class,'index']);
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/blog',[HomeController::class,'blog'])->name('blog');
Route::get('/blog/blog-detail',[HomeController::class,'blogDetail'])->name('blog-detail');
Route::get('/candidat/candidat-dashboard',[HomeController::class,'candidatDashboard'])->name('candidat-dashboard')->middleware('candidat-access');
Route::get('/entreprise/entreprise-dashboard',[HomeController::class,'entrepriseDashboard'])->name('entreprise-dashboard')->middleware('entreprise-access');
Route::get('/candidat/half-map-grid',[HomeController::class,'hmg'])->name('hmg');
Route::get('/candidat/half-map-list',[HomeController::class,'hml'])->name('hml');
Route::get('/candidat/search-entreprise-grid',[HomeController::class,'seg'])->name('seg');
Route::get('/candidat/search-entreprise-list',[HomeController::class,'sel'])->name('sel');
Auth::routes();
