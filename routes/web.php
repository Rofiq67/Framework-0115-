<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;

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

// Route::get('/', function () {
//     return view('welcome');
// });

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

Route::get('/', [MahasiswaController::class, 'index']);
Route::get('/create', [MahasiswaController::class, 'create']);
Route::post('/store', [MahasiswaController::class, 'store']);
Route::get('/show/{nim}', [MahasiswaController::class, 'show']);
Route::post('/update/{nim}', [MahasiswaController::class, 'update']);
Route::get('/destroy/{nim}', [MahasiswaController::class, 'destroy']);

