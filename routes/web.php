<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FinancierController;
use App\Http\Controllers\FundedController;
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
Route::get('admin/login',[AdminController::class,'loginForm'])->name('admin.login');
Route::post('admin/login',[AdminController::class,'checkLogin'])->name('save.admin.login');



////////////////////////////Financier Authentication Routes\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('financier/login',[FinancierController::class,'loginForm'])->name('financier.login');
Route::post('financier/login',[FinancierController::class,'checkLogin'])->name('save.financier.login');

Route::get('financier/register',[FinancierController::class,'registerForm'])->name('financier.register');
Route::post('financier/register',[FinancierController::class,'store'])->name('save.financier.register');

////////////////////////////Financier Authentication Routes\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\




Auth::routes();
Route::group(['as' => 'home'],function (){
    Route::get('/', [HomeController::class, 'index']);
//    Route::get('/',[HomeController::class,'allProjects']);
//    Route::get('/',[FundedController::class,'fundedProjects']);


});

Route::get('about',function (){
    return view('MMM.about');
})->name('about');


////////////////////////////Resources Routes\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::resource('users',UserController::class);
Route::resource('projects',ProjectController::class);
Route::resource('funded',FundedController::class);
////////////////////////////Resources Routes\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

Route::get('sign-in',function (){
   return view('html.default.auth.login');
});

////////////////////////////Show And Update Financier Profile\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('financier/profile/{id}',[FinancierController::class,'financierProfile'])->name('financiers.profile');
Route::put('financiers/{financier}',[FinancierController::class,'update'])->name('financiers.update');
////////////////////////////Show And Update Financier Profile\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\




Route::get('profile/{id}',[UserController::class,'index'])->name('profile');
Route::get('my-projects',[ProjectController::class,'myProjects'])->name('myProjects');
Route::get('my-funded-projects',[FundedController::class,'myFundedProjects'])->name('myFundedProjects');
Route::get('entrepreneurs',[HomeController::class,'entrepreneurs'])->name('entrepreneurs');
Route::get('financiers',[FinancierController::class,'index'])->name('financiers.index');
Route::get('indexProjects',[AdminController::class,'indexProjects'])->name('projectIndex');
Route::get('indexFundedProjects',[AdminController::class,'indexFundedProjects'])->name('projectFundedIndex');


//////////////////////////// Show Users List In CMS \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::get('indexUsers',[UserController::class,'indexUsers'])->name('indexUsers');



//////////////////////////// Financing Project From Financier \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
Route::post('financing',[FinancierController::class,'financeProject'])->name('financeProject');
Route::get('indexFinanciers',[FinancierController::class,'indexFinanciers'])->name('indexFinanciers');








Route::group(['prefix'=>'CMS','middleware'=>'auth:admin'],function (){
//    Route::get('/',function (){
//        return view('CMS.dashboard');
//    })->name('dashboard');
    Route::get('/',[AdminController::class,'dashboard'])->name('dashboard');


});

