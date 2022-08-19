<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\postController;
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
Route::get('/dashboard',[homeController::class,'index']);
Route::get('/posts',[postController::class,'index']);
Route::get('/post/show/{id}',[postController::class,'show']);
Route::get('/post/create',[postController::class,'create']);
Route::get('/post/update/{id}',[postController::class,'update']);
Route::get('/post/delete/{id}',[postController::class,'delete']);
Route::post('/comments',[CommentController::class,'store']);
// Route::get('/About',[homeController::class,'About']);
// Route::get('/contact',[homeController::class,'contact']);

// });
