<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\Admin\AdminArticleController;

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

Route::get('/', [ MainController::class, 'home'])->name('home');
Route::get('/articles', [ MainController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ MainController::class, 'show'])->name('article');
Auth::routes();



// Route::middleware([AdminMiddleware::class])->group(function () {
//     Route::redirect('/admin', '/admin/articles');
//     Route::get('/admin/articles', [ AdminArticleController::class, 'index'])->name('admin.article.index');
//     Route::get('/admin/articles/create', [ AdminArticleController::class, 'create'])->name('admin.article.create');
//     Route::post('/admin/articles/store', [ AdminArticleController::class, 'store'])->name('admin.article.store');
//     Route::get('/admin/articles/{id}/edit', [ AdminArticleController::class, 'edit'])->name('admin.article.edit');
//     Route::put('/admin/articles/{id}/update', [ AdminArticleController::class, 'update'])->name('admin.article.update');
//     Route::delete('/admin/articles/{id}/delete', [ AdminArticleController::class, 'delete'])->name('admin.article.delete');
// });

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
