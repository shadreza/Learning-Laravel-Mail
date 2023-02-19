<?php

use Illuminate\Support\Facades\Mail;
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
    // return view('welcome');


    // adding the mail functionality

    $data = [
        'title' => 'Assalamu Alaikum all !!!',
        'content' => 'We are all muslims'
    ];

    // the following line will be sending the view, data
    Mail::send('emails.test', $data, function ($message){
        $message->to('shadreza100@gmail.com', 'shad')->subject('hello from app');
        
    });
});
