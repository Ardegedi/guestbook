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

use Illuminate\Http\Request;
//Паттерн для id
//$router->pattern('id', '[0-9]+');


Route::get('/', ['as'=>'homepage', 'uses'=>'HomeController@index']);



Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/*
Route::get('user/{name}/{desc}', function(Request $request, $name)
{
    if ($request->route('desc'))
    {
        return $request->route('name').' - '.$name;
    }
});
Route::get('check/{age}', ['middleware'=>'age', function($age){return 'Checked Age='.$age;}]);

Route::get('home', ['as'=>'home', 'uses'=>'HomeController@index']);



Route::group(['middleware'=>'auth'], function()
{
	Route::get('redir', function()
	{
		$url = route('update');
		$redirect = redirect()->route('update');
		return 'text';
	});

	//Несколько типов Http запросов и выводимени роута
	Route::match(['get','post'], 'updates', array('as'=>'update', function()
	{
		return Route::currentRouteName();
	})
	);
});
*/
/*
//Только Https запросы
Route::get('admin', array('https', function(){return 'security connection';}));	

//Запросы с параметрами
//Обязательный параметр
Route::get('article/{id}', function($id)
{
	return 'Article №'.$id;
});

//Необязательный параметр
Route::get('help/{id?}', function($id = 0)
{
	return 'help fo user '.$id;
});

//С регулярным выражением
Route::get('delete/{id}', function($id)
{
	return 'Deleted by ID = '.$id;
})
->where('id','[0-9]+');

//Несколько параметров
Route::get('story/{author}/{theme}/{ver?}', function($author,  $theme, $ver='1.0')
{
	return 'Story by '.$author.' version:'.$ver;
});*/


//По урокам Афанасьева
Route::get('post', ['as'=>'post', 'uses'=>'PostController@index']);
Route::get('unpublished', ['as'=>'post.unpublished', 'uses'=>'PostController@unpublished']);