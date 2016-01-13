<?php
################ chamb.net ####################

# Pages
Route::get('/', ['as' => 'home_path', 'uses' => 'AHK\HomeController@home']);
Route::get('about', ['as' => 'about_path', 'uses' => 'AHK\HomeController@about']);
Route::get('community', ['as' => 'companies_path', 'uses' => 'AHK\CompaniesController@index']);
Route::get('lang/{lang}', ['as' => 'set_language', 'uses' => 'AHK\SettingsController@setLocale']);

Route::group(['prefix' => 'health'], function ()
{
	Route::get('info', ['as' => 'health.info', 'uses' => 'AHK\HealthController@info']);
	Route::get('news', ['as' => 'health.news', 'uses' => 'AHK\HealthController@news']);
});

# Working Groups
Route::get('working_groups', ['as' => 'working_groups', 'uses' => 'AHK\WorkingGroupsController@index']);

Route::get('terms_of_use', ['as' => 'terms_of_use_path', 'uses' => 'AHK\HomeController@termsOfUse']);

# Registration
Route::post('users/store', ['as' => 'users.store', 'uses' => 'AHK\UsersController@store']);

# Authentication
Route::group(['prefix' => 'auth'], function ()
{
	Route::post('login', ['as' => 'sessions.store', 'uses' => 'AHK\SessionsController@store']);
	Route::delete('logout', ['as' => 'sessions.destroy', 'uses' => 'AHK\SessionsController@destroy']);
});

################ chamb.net/cms ####################

Route::group(['prefix' => 'cms'], function ()
{
	Route::get('', ['as' => 'cms.dashboard', 'uses' => 'Cms\DashboardController@dashboard']);

	Route::get('dashboard', ['as' => 'cms.dashboard', 'uses' => 'Cms\DashboardController@dashboard']);
	Route::group(['prefix' => 'users'], function ()
	{
		Route::get('subscribers', ['as' => 'cms.users.subscribers', 'uses' => 'Cms\UsersController@subscribers']);
		Route::get('administrators', ['as' => 'cms.users.administrators', 'uses' => 'Cms\UsersController@administrators']);
	});

	# Companies
	Route::resource('companies', 'Cms\CompaniesController', ['only' => ['index']]);

	# Articles
	Route::group(['prefix' => 'articles'], function ()
	{
		Route::get('published', ['as' => 'cms.articles.published', 'uses' => 'Cms\ArticlesController@published']);
		Route::get('unpublished', ['as' => 'cms.articles.unpublished', 'uses' => 'Cms\ArticlesController@unpublished']);
		Route::resource('categories', 'Cms\CategoriesController', ['except' => ['show', 'destroy']]);
		Route::resource('tags', 'Cms\TagsController', ['except' => ['show', 'destroy']]);
	});
	Route::resource('articles', 'Cms\ArticlesController', ['except' => ['index', 'show', 'destroy']]);

	# Users
	Route::get('users', ['as' => 'cms.users', 'uses' => 'Cms\DashboardController@dashboard']);

	# Authentication
	Route::get('auth/login', ['as' => 'cms.sessions.create', 'uses' => 'Cms\SessionsController@create']);
	Route::post('auth/login', ['as' => 'cms.sessions.store', 'uses' => 'Cms\SessionsController@store']);
	Route::delete('auth/logout', ['as' => 'cms.sessions.destroy', 'uses' => 'Cms\SessionsController@destroy']);
	Route::get('lang/{lang}', ['as' => 'cms.set_language', 'uses' => 'Cms\SettingsController@setLocale']);
});
