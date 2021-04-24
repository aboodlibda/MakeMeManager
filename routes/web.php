<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();
//Route::group(['middleware' => ['auth']],function (){


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('MMM.index');

});



Route::get('about',function (){
    return view('MMM.about');
})->name('about');



Route::resource('users',UserController::class);
Route::resource('projects',ProjectController::class)->middleware('auth');




Route::get('profile/{id}',[UserController::class,'index'])->name('profile');
Route::get('my-projects',[ProjectController::class,'myProjects'])->name('myProjects');
Route::get('/',[HomeController::class,'allProjects'])->name('home');
Route::get('entrepreneurs',[HomeController::class,'entrepreneurs'])->name('entrepreneurs');


Route::get('indexUsers',[UserController::class,'indexUsers'])->name('indexUsers');









Route::view('parent','MMM.parent');
Route::view('dashParent','CMS.parent');

Route::get('CMS',function (){
   return view('CMS.dashboard');
})->name('dashboard');



//});
