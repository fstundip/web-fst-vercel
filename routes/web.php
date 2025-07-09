<?php

use App\Models\Post;
use App\Models\Bidang;
use App\Models\Anggota;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardPageController;
use App\Http\Controllers\DashboardAnggotaController;
use App\Http\Controllers\DashboardBidangController;
use App\Http\Controllers\DashboardJabatanController;
use App\Http\Controllers\DashboardJurusanController;
use App\Http\Controllers\DashboardAngkatanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home']);

Route::get('/admin/login', [LoginController::class, 'index']);
Route::post('/admin/login', [LoginController::class, 'authenticate']);
Route::post('/admin/logout', [LoginController::class, 'logout']);

Route::get('/admin/register', [RegisterController::class, 'index']);
Route::post('/admin/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::resource('/dashboard/categories', DashboardCategoryController::class)->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
Route::resource('/dashboard/pages', DashboardPageController::class)->middleware('auth');
Route::resource('/dashboard/bidang-kabinet', DashboardBidangController::class)->middleware('auth');
Route::resource('/dashboard/jabatan-kabinet', DashboardJabatanController::class)->middleware('auth');
Route::resource('/dashboard/jurusan-kabinet', DashboardJurusanController::class)->middleware('auth');
Route::resource('/dashboard/angkatan-kabinet', DashboardAngkatanController::class)->middleware('auth');
Route::resource('/dashboard/anggota-kabinet', DashboardAnggotaController::class)->middleware('auth');
Route::get('/dashboard/categories/checkSlug/{name?}', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/posts/checkSlug/{title?}', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/pages/checkSlug/{title?}', [DashboardPageController::class, 'checkSlug'])->middleware('auth');
Route::get('/dashboard/bidang-kabinet/checkSlug/{name?}', [DashboardBidangController::class, 'checkSlug'])->middleware('auth');


Route::get('/bidang-kabinet/{slug}', [BidangController::class, 'show']);
Route::get('/informasi/{slug}', [CategoryController::class, 'show']);
Route::get('/{slug}', [PageController::class, 'show']);
Route::get('/informasi', [PostController::class, 'index']);
Route::get('/informasi/{category_slug}/{post_slug}', [PostController::class, 'show']);




