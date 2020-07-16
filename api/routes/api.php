<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');


Route::group(['middleware' => 'auth:api'], function(){
 //user   
Route::get('details', 'UserController@details');
Route::post('logout', 'UserController@logout');
//items
Route::post('add', 'ItemsController@store');
Route::get('items', 'ItemsController@index');
Route::get('show/{id}', 'ItemsController@show');
Route::post('delete/{id}', 'ItemsController@delete');
Route::put('update/{id}', 'ItemsController@update');
//transaction
Route::get('transactions','TransactionsController@index');
Route::post('transactions/create','TransactionsController@store');
Route::get('transactions/show/{id}','TransactionsController@show');
Route::put('transactions/update/{id}','TransactionsController@update');
Route::post('transactions/delete/{id}','TransactionsController@destroy');
//transactionItem
Route::get('transaction/items/','TransactionItemsController@index');
Route::get('transaction/items/show/{id}','TransactionItemsController@show');
Route::post('transaction/items/create','TransactionItemsController@store');
Route::put('transaction/items/update/{id}','TransactionItemsController@update');
Route::post('transaction/items/delete/{id}','TransactionItemsController@destroy');
});