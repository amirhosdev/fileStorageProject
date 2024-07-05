<?php

use App\Http\Controllers\Admin\FileController;
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

Route::get('/', function () {
    return view('home');
});
Route::prefix('admin')->group(function (){
    Route::prefix('files')->group(function (){
        Route::get('/' , [FileController::class , 'index'])->name('admin.file.index');
        Route::get('/create' , [FileController::class , 'create'])->name('admin.file.create');
        Route::post('/store' , [FileController::class , 'store'])->name('admin.file.store');
        Route::get('/edit/{file}' , [FileController::class , 'edit'])->name('admin.file.edit');
        Route::get('/update/{file}' , [FileController::class , 'update'])->name('admin.file.update');
        Route::get('/destroy/{file}' , [FileController::class , 'destroy'])->name('admin.file.destroy');
    });
});

