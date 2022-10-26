<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\QrController;
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
Route::get('storage_link', function (){
    \Illuminate\Support\Facades\Artisan::call('storage:link');
    return 'Storage Link has been created';
})->name('storage_link');
Route::get('fresh_start', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate:fresh --seed');
    return 'Fresh Start is Done';
})->name('fresh_start');


Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('qr-link/{qr:slug}', [PageController::class, 'link'])->name('page.link');


Route::get('user/profile/{user:user_name}', [UserController::class, 'profile'])->name('user.profile');
Route::get('user/history/{user:user_name}', [UserController::class, 'history'])->name('user.history');
Route::resource('user', UserController::class, ['parameters' => [
    'user' => 'user:user_name'
]]);

Route::resource('qr', QrController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
