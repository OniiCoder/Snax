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

Route::post('/api/add-category', 'ApiController@addCategory');
Route::post('/api/add-food-item', 'ApiController@addFoodItem');
Route::post('/api/add-new-order', 'ApiController@addNewOrder');
Route::post('/api/update-order-to-completed/{orderID}', 'ApiController@updateOrder');

Route::get('/api/all-items', 'ApiController@allItems');
Route::get('/api/user-orders/{userID}', 'ApiController@item');
Route::get('/api/pending-orders/{userID}', 'ApiController@pendingOrders');
Route::get('/api/completed-orders/{userID}', 'ApiController@completedOrders');