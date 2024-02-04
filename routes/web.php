<?php

use App\Http\Controllers\TicketsController;
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
    return view('home');
})->name('home');

//Route::get('/tickets', function () {
 //   return view('tickets');})->name('tickets.index'); - route anonima

Route::get('/tickets',[TicketsController::class,'index'])->name('tickets.index');

Route::get('/ticket/{id}',[TicketsController::class,'show'])->name('ticket.show');

Route::post('ticket',[TicketsController::class,'send'])->name('send_email');