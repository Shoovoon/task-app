<?php

use App\Http\Controllers\FriendController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/', [FriendController::class, 'index'])->name('friend.index');
// Route::get('/create', [FriendController::class, 'create'])->name('friends.create');
// Route::post('/store', [FriendController::class, 'store'])->name('friends.store');

Route::resource('/friends', FriendController::class);

Route::get('/clear', function() {

    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

 
    return "Cache is cleared. You may refresh the page. GoodLuck!";
 
 });
