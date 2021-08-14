<?php
use App\Book;
use Illuminate\Http\Request; 




//一覧
Route::get('/', 'BooksController@index');

//追加
Route::post('/books','BooksController@store');

//編集
Route::get('/booksedit/{books}','BooksController@edit');
Route::post('/books/update','BooksController@update');

//削除
Route::delete('/book/{book}','BooksController@destroy');

//Auth
Auth::routes();

