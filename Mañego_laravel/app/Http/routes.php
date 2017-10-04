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

Route::get('/',function()
{
	return view('welcome2');
}
);

//Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
 
 Route::get('users',function()
{
	return 'Users!';
}
);

Route::get('/about',function()
{
	return view('about2');
}
);
Route::get('/php2',function()
{
	return view('php2');
}
);
Route::get('/subject',function()
{
	return view('subject');
}
);
Route::get('/educ',function()
{
	return view('educ');
}
);
Route::get('/media',function()
{
	return view('media');
}
);