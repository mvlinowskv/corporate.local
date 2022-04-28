<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

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
    return view('main');
});

Route::get('/articles', function() {

        $articles = DB::table('articles')->get();

        return view('articles.show', ['articles' => $articles]);
       
});


Route::get('/articles/{url}', [ArticleController::class, 'showSingle']);

Route::get('/register', [RegisterController::class, 'create']);

Route::post('/', [RegisterController::class, 'store']);

// Route::get('/register', function() {
//     return view('registration.create');

Route::get('/login', [SessionController::class, 'create']);

Route::post('/', [SessionController::class, 'store']);

Route::get('/logout', [SessionController::class, 'destroy']);

Route::get('/create', [ArticleController::class, 'create']);
Route::post('/articles', [ArticleController::class, 'store']);

