<?php


Route::controller( Controller::detect() );


Route::get('/', function()
{

});





Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function()
{
	return Response::error('500');
});

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});

Route::filter('product_id', function(){
	if(
		!isset(Request::route()->parameters[1]) || 
		!is_numeric(Request::route()->parameters[1])
	) {
		return Redirect::to('/produto');
	}
});




