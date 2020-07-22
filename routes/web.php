<?php

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
	$status = App\Status::all();
	$image = App\Picture::all();
	return view('welcome',compact('status','image'));
 });
Route::get('/Launcher',function(){
    $file =  public_path()."/download/AsikIndo_Launcher.exe";

    $headers = array(
        'content-type : application/exe',
    );
    return Response::download($file,"AsikIndo_Launcher.exe",$headers);
});
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
Route::get('/home','HomeController@index')->name('home');
Route::resource('/home','HomeController');
Route::get('/home/{status}/delete','HomeController@delete');
Route::resource('/status','StatusController');
Route::get('/status/{picture}/delete','StatusController@delete');
});
