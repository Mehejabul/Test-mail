<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

// Route::get('/send-mail', function () {

//     $details = [
//         'title' => 'Mail from ItSolutionStuff.com',
//         'body' => 'This is for testing email using smtp'
//     ];

//     \Mail::to('mehejabuloittizzo01@gmail.com')->send(new \App\Mail\MyTestMail($details));

//     dd("Email is Sent.");
// });


Route::get('/contact',[Testcontroller::class,'contact'])->name('contact.mail');
Route::Post('/sent/mail',[Testcontroller::class,'submit'])->name('sent.mail');
