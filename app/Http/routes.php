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
Route::post('test',function(){

	    echo '<pre>';
	    print_r(Request::only('test'));
	    echo '</pre>';

	    Request::flash();
});

Route::get('session',function(){
      
       echo '<pre>';
       print_r(Session::all());
       echo '</pre>';
});
Route::get('flash',function(){
     
       echo '<pre>';
       print_r(Request::old());
       echo '</pre>';
});

Route::get('test1', function() {
      
      //return redirect()->action('App\Http\Controllers\ConnectionController@index');
	   return redirect()->route('connection.index');

});
Route::resource('connection', 'ConnectionController');
Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');
Route::get('momo', function(){

	return View::make('form');
});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
