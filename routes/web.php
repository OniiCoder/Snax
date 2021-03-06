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

Route::post('/api/register', 'Api\AuthController@register');
Route::post('/api/login', 'Api\AuthController@login');
Route::post('/api/password/email', 'Api\ForgotPasswordController@sendResetLinkEmail');
Route::post('/api/password/reset', 'Api\ResetPasswordController@reset');

Route::post('/api/add-category', 'ApiController@addCategory');
Route::post('/api/add-food-item', 'ApiController@addFoodItem');
Route::post('/api/add-new-order', 'ApiController@addNewOrder');
Route::post('/api/update-order-to-completed/{orderID}', 'ApiController@updateOrder');
Route::post('/api/delete-order/{orderID}', 'ApiController@deleteOrder');

Route::get('/api/all-items', 'ApiController@allItems');
Route::get('/api/user-orders/{userID}', 'ApiController@item');
Route::get('/api/pending-orders/{userID}', 'ApiController@pendingOrders');
Route::get('/api/completed-orders/{userID}', 'ApiController@completedOrders');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Vendor Routes
Route::get('/vendor/home', 'VendorController@index');
Route::get('/vendor/orders', 'VendorController@orders');
Route::get('/vendor/products', 'VendorController@products');
Route::get('/vendor/business-profile', 'VendorController@profile');
//new business register
Route::post('/vendor/save-business', 'VendorController@saveBusiness');

//Vendor Routes
Route::get('/logistics/home', 'LogisticController@index');
Route::get('/logistics/orders', 'LogisticController@orders');

