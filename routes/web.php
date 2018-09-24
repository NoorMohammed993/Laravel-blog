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
use App\User;
use App\Profile;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Auth::routes();

Route::get('/test', function (){
    
    $user=Profile::find(1)->user;
    
    return $user;
    
});
  




////////////// start CURD for Post  ////////////////////////////////


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
    
    
    
////////////// start CURD for Category  ////////////////////////////////
    
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
    

 ////////////// start CURD for Tags  ////////////////////////////////
  
Route::get('/tags', [
    
    'uses' => 'TagsController@index',
    'as'   => 'tag.index' 
]);

Route::get('/tag/create', [
    
    'uses' => 'TagsController@create',
    'as'   => 'tag.create' 
]);
    
Route::post('/tag/store', [
    
    'uses' => 'TagsController@store',
    'as'   => 'tag.store' 
]);
    
Route::get('/tag/edit/{id}', [
    
    'uses' => 'TagsController@edit',
    'as'   => 'tag.edit' 
]);
    
Route::post('/tag/update/{id}', [
    
    'uses' => 'TagsController@update',
    'as'   => 'tag.update' 
]);
    
Route::get('/tag/delete/{id}', [
    
    'uses' => 'TagsController@destroy',
    'as'   => 'tag.delete' 
]);
   
  ////////////// start CURD for Users  ////////////////////////////////
  
Route::get('/users', [
    
    'uses' => 'UsersController@index',
    'as'   => 'user.index' 
]);

Route::get('/user/create', [
    
    'uses' => 'UsersController@create',
    'as'   => 'user.create' 
]);
    
Route::post('/user/store', [
    
    'uses' => 'UsersController@store',
    'as'   => 'user.store' 
]);
    
Route::get('/user/edit/{id}', [
    
    'uses' => 'UsersController@edit',
    'as'   => 'user.edit' 
]);
    
Route::post('/user/update/{id}', [
    
    'uses' => 'UsersController@update',
    'as'   => 'user.update' 
]);
    
Route::get('/user/delete/{id}', [
    
    'uses' => 'UsersController@destroy',
    'as'   => 'user.delete' 
]);
   
  
});
