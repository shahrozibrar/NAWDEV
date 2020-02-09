<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/
Route::get('/', function () {
    return view('index');
});

Route::resource('/projects','ProjectController');
Route::resource('/blogs','BlogController');



Route::get('contact-us', 'ContactUSController@contactUS');
Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUSController@contactSaveData']);

Route::get('login', function(){
    return view('users/login');
});

Route::post('user/do-login','Auth\AuthController@doLogin');

Route::get('/logout',function(){

    Auth::logout();

    return redirect('/');

});