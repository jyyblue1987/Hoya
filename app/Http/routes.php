<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

session_start();
Route::get('/admin', function () {
    return Redirect::to('/login');
});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

/*  Route::get('/', function()
{
	return view('pages.home'); // laravel 5 return View('pages.home');
});  */
Route::get('/', 'FrontController@index');


Route::get('/contactus', 'ContactController@contactus');
Route::get('/aboutus', 'AboutController@aboutus');
//Route::get('/products', 'ProductsController@products');
Route::get('/treatment', 'ProductsController@treatment');
Route::get('/photochromics', 'ProductsController@photochromics');
Route::get('/singlevision', 'ProductsController@singlevision');
Route::get('/progressive', 'ProductsController@progressive');
Route::get('/speciality', 'ProductsController@speciality');
Route::get('/fullproduct', 'ProductsController@fullproduct');
Route::get('/lensmaterial', 'ProductsController@lensmaterial');
Route::get('/lens', 'LensController@lens');
Route::get('/career', 'CareerController@career');

Route::post('/contact_message', 'ContactController@message'); 
Route::get('/contact_message', 'ContactController@message');
Route::get('/second_content', 'AboutController@second_content');
Route::get('/third_content', 'AboutController@third_content');
Route::get('/first_content', 'AboutController@first_content');




//admin panel
Route::any('/admin/ad_totaldelete', 'AdvertisementController@ad_totaldelete'); 
Route::any('/admin/ad_edit/{id?}', 'AdvertisementController@ad_edit'); 
Route::any('/admin/ad_delete/{id?}', 'AdvertisementController@ad_delete'); 
Route::post('/admin/ad_item', 'AdvertisementController@addItem');
Route::post('/admin/update_ad_item/{id?}', 'AdvertisementController@updateItem');
Route::get('/admin/ad_register', 'AdvertisementController@ad_register');
Route::get('/admin/advertisement', 'AdvertisementController@index');
Route::get('/admin/career', 'CareerController@index');
Route::any('/admin/career_edit/{id?}', 'CareerController@car_edit'); 
Route::post('/admin/career_item', 'CareerController@addItem');
Route::get('/admin/career_register', 'CareerController@car_register');
Route::any('/admin/career_delete/{id?}', 'CareerController@car_delete'); 
Route::post('/admin/update_career_item/{id?}', 'CareerController@updateItem');
Route::get('/admin/product', 'ProductController@index');
Route::any('/admin/product_edit/{id?}', 'ProductController@ad_edit'); 
Route::post('/admin/update_product_item/{id?}', 'ProductController@updateItem');
Route::get('/login','UserController@login');
Route::post('/admin/postLogin','UserController@postLogin');
Route::get('/admin/logout', 'UserController@logout');

Route::get('/admin/index', array('uses'=>'UserController@index'));
Route::get('/admin/users', function(){
	return Redirect::to('/admin/index');
});
Route::post('/admin/search', 'UserController@search'); 
Route::post('/admin/update', 'UserController@update'); 
Route::get('/admin/search', 'UserController@search'); 
Route::any('/admin/process/{id?}', 'ProcessController@process'); 
Route::any('/admin/email', 'UserController@email');
Route::get('/admin/userprofile', 'UserController@userprofile');
