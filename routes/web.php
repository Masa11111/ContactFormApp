<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;

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
    return view('contact.ContactForm');
});
Route::patch('/', [ContactController::class, 'confirm']);
Route::post('/', [ContactController::class, 'send']);
