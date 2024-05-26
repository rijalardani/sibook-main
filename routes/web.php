<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\DashboardCategoryController;

// Route Home
Route::get('/', function () {
  return redirect('/blog');
});

//Route error
Route::fallback(function () {
  return view('errors.4xx');
});

//Route post blog
Route::controller(PostController::class)->group(function () {

  Route::prefix('/blog')->group(function () {
    Route::get('/', 'index');
    Route::get('/algoritma', 'categories');
    Route::get('/{post:slug}', 'show');
    Route::fallback(function () {
      view('errors.4xx');
    });
  });
  Route::get('/categories', 'categories');
  Route::get('/categories', 'categories');
});

//  To login
Route::controller(UserController::class)->group(function () {
  Route::get('/login', 'login')->name('login')->middleware('guest');
  Route::post('/login', 'postLogin');
  Route::get('/register', 'register')->middleware('guest');
  Route::post('/register', 'postRegister');
  Route::get('/dashboard', 'dashboard')->middleware('auth');
  Route::get('/logout', 'logout')->middleware('auth');
  Route::get('/home', 'home');
});

// yg udah login
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/categories/checkSlug', [DashboardCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('dashboard/categories', DashboardCategoryController::class)->except('show')->middleware('superAdmin');

// Route::get('/dashboard/bookmarks/index', [BookmarkController::class, 'index']);
// Route::post('/dashboard/bookmarks', [BookmarkController::class, 'store'])->name('bookmark.store');
// Route::delete('/bookmarks/{bookmark}', [BookmarkController::class, 'destroy'])->name('bookmark.destroy');


// Route home


// Route ???
Route::prefix('/coba')->group(function () {
  Route::get('/1', function () {
    return request(['title', 'name']);
  });
  Route::get('/2', function () {
    return request();
  });
});
