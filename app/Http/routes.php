<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Support\Facades\Mail;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/search-results', function () {

    return sprintf('Search results For "%s"',Request::input('search'));
});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('mail/queue', function () {

    Mail::later(5,'emails.queued_email',['name'=>'sudip sarker'],function($message){

        $vari=rand(1,100);
        $message->to('sudip2222@diu.edu.bd','Sudip Kumar Sarker')->subject($vari);
    });

    return 'Email will be sent in 5 secend .....';
});
