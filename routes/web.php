<?php

use App\Http\Controllers\Inventory\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Modules\Invenstory\Entity\Category;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("/inventory/Category/add",[CategoryController::class,'Add']);
    Route::Post("/inventory/Category/add-post", [CategoryController::class,'AddPost']);

    Route::get("inventory/Category",[CategoryController::class,'Index']);
    Route::get("/inventory/Category/edit",[CategoryController::class,'edit']);

    Route::post("/inventory/Category/edit-post",[CategoryController::class,'Editpost']);
    Route::get("/inventory/Category/delete",[CategoryController::class,'Delete']);

});

require __DIR__.'/auth.php';
 