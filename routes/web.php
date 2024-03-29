<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\TagsController;

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

Route::get('/lang/{lang}', function($lang) {
    session(['lang'=> $lang]);
    return back();
});

Route::get('/', [MainController::class, 'index']);
Route::get('/category/{slug}', [MainController::class, 'categoryPosts'])->name('categoryPosts');
Route::get('/posts/{slug}', [MainController::class, 'postDetail'])->name('postDetail');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('categories', CategoriesController::class);  
    Route::resource('posts', PostController::class);
    Route::resource('tags', TagsController::class);
}); 

require __DIR__.'/auth.php';
