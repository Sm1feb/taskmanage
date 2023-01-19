<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ViewController;
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
Route::get('/project', function () {
    return view('project');
});
Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/image', function () {
//     return view('image');
// });
Route::get('image','App\Http\Controllers\ContactController@display3');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


//Comment In Sites
Route::post('comment2/{id}','App\Http\Controllers\MController@comment2');
//delete comment 
Route::get('comment4/{id}','App\Http\Controllers\MController@comment4');
//---All Comments and task are View In it----
Route::get('/index',[TaskController::class,'index'])->name('index');
//----View 
// Route::resource('view',ViewController::class);
Route::get('view/{id}','App\Http\Controllers\MController@view4');
//---Create task--
Route::resource('task',TaskController::class);
//logout Website----
Route::get('/logout-user','App\Http\Controllers\MController@logout');
//--Contact Us --
Route::post('/form-submit','App\Http\Controllers\ContactController@contact');
//
Route::post('index3','App\Http\Controllers\ContactController@update');