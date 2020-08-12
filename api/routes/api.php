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
 Route::post('logout', 'UserController@logout');
 Route::get('details', 'UserController@details');
 //items
 Route::get('getItems/{id}','ItemsController@calculateDiscount');
 Route::post('add', 'ItemsController@store')->name('item.add');
 Route::get('items', 'ItemsController@index')->name('item.all');
 Route::get('show/{id}', 'ItemsController@show')->name('item.show');
 Route::post('delete/{id}', 'ItemsController@delete')->name('item.delete');
 Route::put('update/{id}', 'ItemsController@update')->name('item.update');
 //transaction
 Route::get('transactions','TransactionsController@index')->name('transaction.all');
 Route::post('transactions/create','TransactionsController@store')->name('transaction.create');
 Route::get('transactions/show/{id}','TransactionsController@show')->name('transaction.show');
 Route::put('transactions/update/{id}','TransactionsController@update')->name('transaction.update');
 Route::post('transactions/delete/{id}','TransactionsController@destroy')->name('transaction.delete');
 //transactionItem
 Route::get('transaction/items/','TransactionItemsController@index');
 Route::get('transaction/items/show/{id}','TransactionItemsController@show');
 Route::post('transaction/items/create','TransactionItemsController@store');
 Route::put('transaction/items/update/{id}','TransactionItemsController@update');
 Route::post('transaction/items/delete/{id}','TransactionItemsController@destroy');
 Route::get('transaction/total_price/{id}','TransactionsController@totalAmount');
 Route::post('transaction/search','ItemsController@searchItem');
});