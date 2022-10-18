<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
Route::post('complete', [ContactController::class, 'create'])->name('contact.complete');
Route::post('contact', [ContactController::class, 'index'])->name('contact.index.back');
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
