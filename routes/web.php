<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
    return view('user.top');
})->name('user.top');

Route::get('cart', [CartController::class, 'index'])->name('user.cart');
Route::get('info', [UserController::class, 'info'])->name('user.info');
Route::post('login', [UserController::class, 'login'])->name('user.login');
Route::get('loginForm', [UserController::class, 'loginForm'])->name('user.loginForm');
Route::post('register', [UserController::class, 'register'])->name('user.register');
Route::get('registerForm', [UserController::class, 'registerForm'])->name('user.registerForm');
Route::get('logout', [UserController::class, 'logout'])->name('user.logout');
Route::get('top', [AdminController::class, 'index'])->name('admin.top');
Route::get('userList', [AdminController::class, 'userList'])->name('admin.userList');
Route::get('menuList', [AdminController::class, 'menuList'])->name('admin.menuList');
Route::get('userEdit', [AdminController::class, 'userEdit'])->name('admin.userEdit');
Route::get('menuEdit', [AdminController::class, 'menuEdit'])->name('admin.menuEdit');


Route::get('confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('complete', [ContactController::class, 'create'])->name('contact.complete');
Route::get('edit/{id}', [ContactController::class, 'edit'])->name('contact.edit');
Route::delete('destroy/{id}/complete', [ContactController::class, 'destroy'])->name('contact.destroy');
Route::post('edit/{id}/complete', [ContactController::class, 'update'])->name('contact.update');


// Route::get('/', function () {
//     return view('top.index');
// })->name('top.index');
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
