<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ContactMailController, CategoryController, LaraveHttpClient, StudentController};
// use App\Http\Controllers\ContactMailController;
// use App\Http\Controllers\CategoryController;
// use App\Http\Controllers\LaraveHttpClient;
// use App\Http\Controllers\StudentController;


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

// static Route get(string $uri, array|string|callable|null $action = null)
// static Route view(string $uri, string $view, array $data = [], int|array $status = 200, array $headers = [])

Route::get('/', function () {
    return view('welcome');
});
Route::view('/terms', 'staticPages.terms', ["copyright"=>2003,"location"=>"Hyderabad"]);
Route::resource('/categories', CategoryController::class); // resourceful controller

// Route::get('/sendmail', 'App\Http\Controllers\ContactMailController@sendContactMail');
Route::get('/sendmail', [ContactMailController::class, 'sendContactMail']);

// Laravel Http Client CRUD examples
Route::get('/httpClient/posts', [LaraveHttpClient::class, 'index']);
Route::get('/httpClient/post/create', [LaraveHttpClient::class, 'store']);
Route::get('/httpClient/post/show', [LaraveHttpClient::class, 'show']);
Route::get('/httpClient/post/delete', [LaraveHttpClient::class, 'destroy']);
Route::get('/httpClient/post/update', [LaraveHttpClient::class, 'update']);


Route::get('/students', [StudentController::class, 'index']);