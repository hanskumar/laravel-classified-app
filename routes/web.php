<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostaddController;

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

/*Route::get('/test', function () {
    return view('welcome');
});*/


// welcome route for home page
Route::get('/', [HomeController::class, 'index']);

Route::get('/signup', [RegisterController::class, 'index']);



Route::get('/post-ad', [PostaddController::class, 'index'])->name('post-add');