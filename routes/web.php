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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');
Route::get('/blog', 'PostsController@index');
Route::get('/blog/facturation-autoentrepreneurs-aucune-obligation-logiciel-certifie', 'PostsController@firstArticle');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('register', '\App\Http\Controllers\Auth\RegisterController@create');

Route::get('thankyou', 'UsersController@thanksAfterRegistration');
Route::get('accountvalidate', 'UsersController@accountValidateAfterRegistration');

Route::get('newuser', 'UsersController@showFormAfterRegistration');

Route::get('register/verify/{token}', 'Auth\RegisterController@verify'); 

Route::get('/sparkpost', function () {
  Mail::send('emails.test', [], function ($message) {
    $message
      ->from('fred@facturehero.com', 'Fred')
      ->to('frederic.lossignol@gmail.com', 'Receiver Name')
      ->subject('From SparkPost with ❤');
  });
});

Auth::routes();
