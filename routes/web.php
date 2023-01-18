<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ContactController;
use App\Models\Com;
use App\Models\User;
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
    // $data=  User::with('cart2')->get();
    // dd($data->toArray());
});
Route::get('/hlo', function () {
    return view('hlo');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Comment In Sites
Route::post('comment2/{id}','App\Http\Controllers\MController@comment2');
//---All Comments and task are View In it----
Route::get('/index',[TaskController::class,'index'])->name('index');
//---Create task--
Route::resource('task',TaskController::class);
//logout Website----
Route::get('/logout-user','App\Http\Controllers\MController@logout');
//--Contact Us --
Route::post('/form-submit','App\Http\Controllers\ContactController@contact');