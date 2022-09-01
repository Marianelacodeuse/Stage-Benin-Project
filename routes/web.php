<?php

// use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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
Route::get('/candidat/candidat-detail/{id}',[UserController::class,'candidatDetail'])->name('candidat-detail');
Route::get('/entreprise/entreprise-dashboard',[HomeController::class,'entrepriseDashboard'])->name('entreprise-dashboard')->middleware('entreprise-access');
Route::get('/candidat/half-map-grid',[HomeController::class,'hmg'])->name('hmg');
Route::get('/candidat/half-map-list',[HomeController::class,'hml'])->name('hml');
Route::get('/candidat/search-stage-grid',[HomeController::class,'ssg'])->name('ssg');
Route::get('/candidat/search-stage-list',[HomeController::class,'ssl'])->name('ssl');
Route::get('/candidat/search-entreprise-grid',[HomeController::class,'seg'])->name('seg');
Route::get('/candidat/search-entreprise-list',[HomeController::class, 'sel'])->name('sel');
Route::get('/candidat/search-candidat-grid',[HomeController::class,'scg'])->name('scg');
Route::get('/candidat/search-candidat-list',[HomeController::class,'scl'])->name('scl');
Route::POST('/candidat/update-user-info',[UserController::class,'uui'])->name('uui');
Route::POST('/candidat/update-user-password',[UserController::class,'uup'])->name('uup');
Route::POST('/candidat/delete-user-account',[UserController::class,'delete'])->name('delete');
Route::POST('/entreprise/create-post',[PostController::class,'create'])->name('create-post');
Route::get('/entreprise/entreprise-dashboard',[PostController::class,'index'])->name('entreprise-dashboard')->middleware('entreprise-access');
Route::get('/post-delete/{id}',[PostController::class, 'destroy'])->name('delete-post');
Route::get('/post-show/{id}',[PostController::class,'show'])->name('show-post');


Route::get('/entreprise/entreprise-detail',[HomeController::class,'detailEntreprise'])->name('detail-entreprise');

Route::post('/post/posting/{id}',[PostController::class,'posting'])->name('posting');

// Route::get('/entreprise/entreprise-dashboard',[PostController::class,'postingUser'])->name('entreprise-dashboard');
Route::get('/post/posting/postsUser',[PostController::class,'postingUser']);
Auth::routes();
