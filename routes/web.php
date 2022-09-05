<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ItemController;

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
});


// Route Crud
Route::resource('/item', ItemController::class)->middleware('auth');

// Route Web Auth

Route::get('home', [CustomAuthController::class,'home'])->middleware('auth');
Route::get('login', [CustomAuthController::class, 'index'])-> name('login')->middleware('guest');
Route::post('custom-login',[CustomAuthController::class, 'customLogin'])->name('login.custom')->middleware('guest');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user')->middleware('guest');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom')->middleware('guest');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


// if (Auth::guest()) {
//     return redirect('login');
// };

// Route::get('/barangkeluar', function () {
//     return view('main.barangkeluar');
// });

Route::get('/gudang', function () {
    return view('main.gudang');
})->middleware('auth');
