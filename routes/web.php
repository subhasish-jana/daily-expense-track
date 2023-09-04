<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/register');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home',[UserController::class,'index'])->middleware('auth')->name('home');
route::get('/post',[UserController::class,'post'])->middleware(['auth', 'admin']);
route::get('/item',[UserController::class,'item'])->middleware('auth')->name('item');
route::get('/item-list',[UserController::class,'itemList'])->middleware('auth')->name('item-list');
route::get('/itemgroup',[UserController::class,'itemGroup'])->middleware('auth')->name('itemgroup');
route::get('/itemgroup-list',[UserController::class,'itemGroupList'])->middleware('auth')->name('itemgroup-list');
route::get('/add-expenditure',[UserController::class,'addExpenditure'])->middleware('auth')->name('add-expenditure');
route::get('/expenditure-list',[UserController::class,'expenditureList'])->middleware('auth')->name('expenditure-list');
route::get('/user-list',[UserController::class,'userList'])->middleware(['auth', 'admin'])->name('user-list');

route::get('/category-list',[UserController::class,'categoryList'])->middleware('auth')->name('category-list');
route::get('/subcategory-list',[UserController::class,'subCategoryList'])->middleware('auth')->name('subcategory-list');
route::get('/add-subcategory',[UserController::class,'addSubcategory'])->middleware('auth')->name('itemgroup');
route::get('/add-category',[UserController::class,'addCategory'])->middleware('auth')->name('add-category');
route::get('/add-subcategory',[UserController::class,'addSubcategory'])->middleware('auth')->name('add-subcategory');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
