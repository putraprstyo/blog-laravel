<?php

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardBlogController;

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
    return view('home', [
        "title" => "Home",
        'title' => 'Blog Categories',
        'categories' => Category::all(),
        'blog_post' => Blog::latest()->paginate(3),
    ]);
});

Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blog/{blogs:slug}', [BlogController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('blog', [
        'title' => "Blog By Category : $category->name",
        'blog_post' => $category->blog,
        'category' => $category->blog->load('category', 'user')
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/registrasi', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/registrasi', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/blog/buatSlug', [DashboardBlogController::class, 'cekSlug'])->middleware('auth');
Route::resource('/dashboard/blog', DashboardBlogController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');