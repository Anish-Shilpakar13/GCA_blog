<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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

/*
 * Main routes for posts 
 */
//? for categories 
Route::get('/category/all',[CategoryController::class,'index'])->name('category.index');
Route::get('/category/{category}',[CategoryController::class,'show'])->name('category.single');
// ? for posts 
Route::get('/',[PostController::class,'index'])->name('post.index');
Route::get('/post/{post}',[PostController::class,'show'])->name('post.single');
/*
 * End  of main routes 
 */
