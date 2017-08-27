<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Members;
use Illuminate\Http\Request;   
Route::get('/', function () {
    return view('members');
});
Route::post('/', function () {
    
});
Route::delete('/', function () {
    
});