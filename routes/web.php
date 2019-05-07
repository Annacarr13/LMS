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

Route::get('/home', 'HomeController@index')->name('home');
//Admin Auth
  Route::get('/admin', 'Admin\IndexController@getIndex'); //

  Route::get('/admin/users', 'Admin\UserController@getIndex'); //

  Route::get('/admin/users/add/admin', 'Admin\UserController@getAdminAdd'); //
  Route::post('/admin/users/add/admin', 'Admin\UserController@postAdminAdd'); //
  Route::get('/admin/users/edit/admin', 'Admin\UserController@getAdminEdit'); //
  Route::post('/admin/users/edit/admin', 'Admin\UserController@postAdminEdit'); //

  Route::get('/admin/users/add/librarian', 'Admin\UserController@getLibrarianAdd'); //
  Route::post('/admin/users/add/librarian', 'Admin\UserController@postLibrarianAdd'); //
  Route::get('/admin/users/edit/librarian', 'Admin\UserController@getLibrarianEdit'); //
  Route::post('/admin/users/edit/librarian', 'Admin\UserController@postLibrarianEdit'); //

  Route::get('/admin/users/add/customer', 'Admin\UserController@getCustomerAdd'); //
  Route::post('/admin/users/add/customer', 'Admin\UserController@postCustomerAdd'); //
  Route::get('/admin/users/edit/customer', 'Admin\UserController@getCustomerEdit'); //
  Route::post('/admin/users/edit/customer', 'Admin\UserController@postCustomerEdit'); //
  Route::post('/admin/users/delete', 'Admin\UserController@Delete'); //

  Route::get('/admin/library', 'Admin\LibraryController@getIndex'); //
  Route::get('/admin/library/add', 'Admin\LibraryController@getAdd'); //
  Route::post('/admin/library/add', 'Admin\LibraryController@postAdd'); //
  Route::get('/admin/library/edit', 'Admin\LibraryController@getEdit'); //
  Route::post('/admin/library/edit', 'Admin\LibraryController@postEdit'); //
  Route::post('/admin/library/delete', 'Admin\LibraryController@Delete'); //

//Librarian Auth
  Route::get('/librarian', 'Librarian\IndexController@getIndex'); //

  // Route::get('/librarian/book/index', 'Librarian\BookController@getIndex'); //
  // Route::get('/librarian/add/book', 'Librarian\BookController@getAdd'); //
  // Route::post('/librarian/add/book', 'Librarian\BookController@postAdd'); //
  // Route::get('/librarian/edit/book', 'Librarian\BookController@getEdit'); //
  // Route::post('/librarian/edit/book', 'Librarian\BookController@postEdit'); //
  // Route::get('/librarian/add/book', 'Librarian\BookController@getAdd'); //
  // Route::post('/librarian/add/book', 'Librarian\BookController@postAdd'); //
  // Route::post('/librarian/delete', 'Librarian\BookController@Delete'); //

  Route::get('/librarian/customer', 'Librarian\CustomerController@getIndex'); //
  Route::get('/librarian/customer/add', 'Librarian\CustomerController@getAdd'); //
  Route::post('/librarian/customer/add', 'Librarian\CustomerController@postAdd'); //
  Route::get('/librarian/customer/edit', 'Librarian\CustomerController@getEdit'); //
  Route::post('/librarian/customer/edit', 'Librarian\CustomerController@postEdit'); //
  Route::post('/librarian/customer/delete', 'Librarian\CustomerController@Delete'); //

  Route::get('/librarian/books', 'Librarian\IndexController@getIndex'); //
  Route::get('/librarian/books/add', 'Librarian\BooksController@getAdd'); //
  Route::post('/librarian/books/add', 'Librarian\BooksController@postAdd'); //
  Route::get('/librarian/books/edit', 'Librarian\BooksController@getEdit'); //
  Route::post('/librarian/books/edit', 'Librarian\BooksController@getEdit'); //
  Route::get('/librarian/books/request', 'Librarian\BooksController@getRequest'); //
  Route::post('/librarian/books/request', 'Librarian\BooksController@postRequest'); //
  Route::get('/librarian/books/requested', 'Librarian\BooksController@getRequested'); //

//Customer Auth
  Route::get('/customer', 'Customer\IndexController@getIndex'); //
  Route::get('/customer/books', 'Customer\IndexController@getIndex'); //
  Route::get('/customer/books/request', 'Customer\BooksController@getRequest'); //
  Route::post('/customer/books/request', 'Customer\BooksController@postRequest'); //
  Route::get('/customer/books/requested', 'Customer\BooksController@getRequested'); //
  Route::post('/customer/books/requested', 'Customer\BooksController@postRequested'); //
  Route::get('/customer/edit', 'Customer\IndexController@getEdit'); //
  Route::post('/customer/edit', 'Customer\IndexController@postEdit'); //
  Route::post('/customer/delete', 'Customer\IndexController@Delete'); //
  Route::get('/customer/details', 'Customer\IndexController@getEdit'); //
  Route::post('/customer/details', 'Customer\IndexController@postEdit'); //
