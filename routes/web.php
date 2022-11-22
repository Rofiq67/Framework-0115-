<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/helloworld', function(){
    echo "<h1> HELLO </h1>";
})->middleware('nama_mdw');

Route::get('/danger', function(){
    echo"<H1> Anda tidak memiliki hak untuk akses</H1>";
});

Route::get('/form', function(){
    return view('form');
});

Route::get('add-blog-post-form', [PostController::class, 'index']);
Route::post('store-form', [PostController::class, 'store']);