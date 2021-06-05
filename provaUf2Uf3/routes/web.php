<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModifiController;
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

Route::get('/send/email',[MailController::class , 'mail']);

Route::get('/loginn',[UserController::class,'loginn']);
Route::post('/getlogin',[UserController::class,'getlogin'])->name('postlogin');

Route::get('/showform',[ModifiController::class,'showform']);
Route::post('/getform',[ModifiController::class,'getform'])->name('postform');




Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


