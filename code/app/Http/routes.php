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

/*Route::get('/', function () {
    return view('movies');
});*/

Route::auth();

Route::any('/home', 'HomeController@index');
Route::any('/', 'MoviesController@getdata');
Route::any('/tvshow', 'HomeController@tvshow');
Route::any('/privacy', 'HomeController@privacy');
Route::any('/term', 'HomeController@term');
Route::any('/about','HomeController@about');
Route::any('/tvShows','HomeController@tvShows');
Route::any('/imdbmovie','HomeController@imdbmovie');
Route::any('/rottenmovie','HomeController@rottenmovie');
//Route::any('/contact','HomeController@contact');
Route::any('/search', 'HomeController@search');
Route::any('/latestMovies', 'HomeController@latestMovie');
Route::any('/latestSeries', 'HomeController@latestSeries');
Route::any('/favourite', 'HomeController@favourite');
Route::any('/popularMovies', 'HomeController@popularMovies');
Route::any('/popularSeries', 'HomeController@popularSeries');
Route::any('/contact','HomeController@contactmail');

Route::any('/admin/login','HomeController@adminLogin');
Route::any('/admin/dashboard','HomeController@adminDashboard');
Route::get('/admin/imdbList','HomeController@imdbList');
Route::get('/admin/rottenList','HomeController@rottenList');

Route::any('/admin/seriesList','HomeController@seriesList');
Route::any('/admin/logout','HomeController@adminLogout');
Route::any('/admin/editSeries/{id}','HomeController@editSeries');
Route::any('/admin/seriesList/','HomeController@updateSeries');

Route::any('/admin/editimdbMovie/{id}','HomeController@editimdbMovie');
Route::any('/admin/editrottenMovie/{id}','HomeController@editrottenMovie');
Route::post('/admin/imdbList/','HomeController@updateMovie');
Route::post('/admin/rottenList/','HomeController@updaterotenMovie');

Route::any('/admin/settings/','HomeController@settings');
Route::any('/admin/setting-email/{id}','HomeController@editsettings');
Route::any('/admin/settings/','HomeController@updatesettings');
Route::any('/admin/addsliderimg/','HomeController@Addsliderimg');
Route::any('/admin/sliderimgList/','HomeController@sliderimgList');
Route::any('/admin/editSliderimg/{id}','HomeController@editSliderimg');
Route::any('/admin/sliderimgList/','HomeController@updatesliderImg');
Route::any('/admin/sliderimgList/{id}','HomeController@delsliderImg');

Route::any('/singlemovie/{id}', 'MoviesController@movies');
Route::any('/rottensmovie/{id}', 'MoviesController@rottensmovie');

/*Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/posts', function()
{
	return View::make('posts');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});
*/
/*Route::get('/login', function()
{
	return View::make('login');
});*/

/*Route::get('/documentation', function()
{
	return View::make('documentation');
});*/
/*Route::get('/dashboard', function()
{
	return View::make('dashboard');
});*/

