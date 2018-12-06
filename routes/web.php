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

Route::get('/', 'HomepageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// testing pages
Route::get('/test1',function(){
    return view('admin.pages.index');
});


Route::get('/pages/pages/index', 'HomepageController@index');

Route::get('/pages/pages/news-detail/{id}', 'HomepageController@show')->name('show');
Route::get('/pages/pages/news-post', 'HomepageController@post')->name('news');
//all routes
Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    // Route::resource('/player','PlayerController');
    //player
    Route::get('/player','PlayerController@index')->name('player.index');
    Route::get('/player/create','PlayerController@create')->name('player.create');
    Route::post('/player/create','PlayerController@store')->name('player.store');
    Route::get('/player/{id}/edit','PlayerController@edit')->name('player.edit');
    Route::post('/player/{id}/edit','PlayerController@update')->name('player.update');
    Route::get('/player/{id}/delete','PlayerController@destroy')->name('player.delete');
    //category
    Route::get('/category','CategoryController@index')->name('category.index');
    Route::get('/category/create','CategoryController@create')->name('category.create');
    Route::post('/category/create','CategoryController@store')->name('category.store');
    Route::get('/category/{id}/edit','CategoryController@edit')->name('category.edit');
    Route::post('/category/{id}/edit','CategoryController@update')->name('category.update');
    Route::get('/category/{id}/delete','CategoryController@destroy')->name('category.delete');
    
    //fixture
    Route::get('/fixture','FixturesController@index')->name('fixture.index');
    Route::get('/fixture/create','FixturesController@create')->name('fixture.create');
    Route::post('/fixture/create','FixturesController@store')->name('fixture.store');
    Route::get('/fixture/{id}/edit','FixturesController@edit')->name('fixture.edit');
    Route::post('/fixture/{id}/edit','FixturesController@update')->name('fixture.update');
    Route::get('/fixture/{id}/delete','FixturesController@destroy')->name('fixture.delete');
    
    //post
    
    Route::get('/post','PostController@index')->name('post.index');
    Route::get('/post/create','PostController@create')->name('post.create');
    Route::post('/post/create','PostController@store')->name('post.store');
    Route::get('/post/{id}/edit','PostController@edit')->name('post.edit');
    Route::post('/post/{id}/edit','PostController@update')->name('post.update');
    Route::get('/post/{id}/delete','PostController@destroy')->name('post.delete');
    //scorer
    Route::get('/scorer','ScorerController@index')->name('scorer.index');
    Route::get('/scorer/create/{id}','ScorerController@create')->name('scorer.create');
    Route::post('/scorer/create/{id}','ScorerController@store')->name('scorer.store');
    Route::get('/scorer/{id}/edit','ScorerController@edit')->name('scorer.edit');
    Route::post('/scorer/{id}/edit','ScorerController@update')->name('scorer.update');
    Route::get('/scorer/{id}/delete','ScorerController@destroy')->name('scorer.delete');
    //season
    Route::get('/season','SeasonController@index')->name('season.index');
    Route::get('/season/create','SeasonController@create')->name('season.create');
    Route::post('/season/create','SeasonController@store')->name('season.store');
    Route::get('/season/{id}/edit','SeasonController@edit')->name('season.edit');
    Route::post('/season/{id}/edit','SeasonController@update')->name('season.update');
    Route::get('/season/{id}/delete','SeasonController@destroy')->name('season.delete');
    //team
    Route::get('/team','TeamController@index')->name('team');
    Route::get('/team/create','TeamController@create')->name('team.create');
    Route::post('/team/create','TeamController@store')->name('team.store');
    Route::get('/team/{id}/edit','TeamController@edit')->name('team.edit');
    Route::post('/team/{id}/edit','TeamController@update')->name('team.update');    
    Route::get('/team/{id}/delete','TeamController@destroy')->name('team.delete');

    //allcategories
    Route::get('/allcat','AllcategoryController@index')->name('allcat');
    Route::get('/allcat/create','AllcategoryController@create')->name('allcat.create');
    Route::post('/allcat/create','AllcategoryController@store')->name('allcat.store');
    Route::get('/allcat/{id}/edit','AllcategoryController@edit')->name('allcat.edit');
    Route::post('/allcat/{id}/edit','AllcategoryController@update')->name('allcat.update');    
    Route::get('/allcat/{id}/delete','AllcategoryController@destroy')->name('allcat.delete');
});

//for detail in news folder
Route::get('/news/detail', 'HomepageController@detail');
Route::get('/news/index', 'HomepageController@indexx');