<?php

use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;
use App\Mail\SendMail;
use App\Jobs\SendMailJob;

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
Route::get('/send-email',function(){
    $data = [
            'name' => 'Syahrizal As',
            'body' => 'Testing Kirim Email di Santri Koding'
    ];
    dispatch(new SendMailJob($data));
    dd("Email Berhasil dikirim.");
});
// Route::get('/send-email', [SendEmailController::class, 'index'])->name('kirim-email');
// Route::post('/post-email', [SendEmailController::class, 'store'])->name('post-email');
