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
    return view('welcome');
});

Auth::routes();



Auth::routes();



//////////////////////////////////// post routes /////////////////////////////////////////////


Route::group(['prefix' => 'admin', 'middleware' => 'auth' ],function () {
    
 Route::get('/home', [
     
     'uses' => 'HomeController@index',
     'as'   => 'home'
 ]);
  
Route::get('/posts', [
    
    'uses' => 'PostController@index',
    'as'   => 'post.index' 
]);
    
Route::get('/post/create', [
    
    'uses' => 'PostController@create',
    'as'   => 'post.create' 
]);


Route::post('/post/store', [
    
    'uses' => 'PostController@store',
    'as'   => 'post.store' 
]); 
    
Route::get('/posts/edit/{id}', [
    
    'uses' => 'PostController@edit',
    'as'   => 'post.edit' 
]);

Route::post('/posts/update/{id}', [
    
    'uses' => 'PostController@update',
    'as'   => 'post.update' 
]);

Route::get('/posts/delete/{id}', [
    
    'uses' => 'PostController@destroy',
    'as'   => 'post.delete' 
]); 
    
Route::get('/posts/trashed/', [
    
    'uses' => 'PostController@trashed',
    'as'   => 'post.trashed' 
]);    

Route::get('/posts/deleteTrashed/{id}', [
    'uses' => 'PostController@deleteTrashed',
    'as'   => 'post.deleteTrashed' 
]);
    
Route::get('/posts/restore/{id}', [
    'uses' => 'PostController@restore',
    'as'   => 'post.restore' 
]); 
    
    
    
////////////// start CURD for Category feild  ////////////////////////////////
    
Route::get('/categories', [
    
    'uses' => 'CategoriesController@index',
    'as'   => 'category.index' 
]);

Route::get('/category/create', [
    
    'uses' => 'CategoriesController@create',
    'as'   => 'category.create' 
]);
    
Route::post('/category/store', [
    
    'uses' => 'CategoriesController@store',
    'as'   => 'category.store' 
]);
    
Route::get('/category/edit/{id}', [
    
    'uses' => 'CategoriesController@edit',
    'as'   => 'category.edit' 
]);
    
Route::post('/category/update/{id}', [
    
    'uses' => 'CategoriesController@update',
    'as'   => 'category.update' 
]);
    
Route::get('/category/delete/{id}', [
    
    'uses' => 'CategoriesController@destroy',
    'as'   => 'category.delete' 
]);

    
    
  
});
