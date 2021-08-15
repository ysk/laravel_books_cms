<?php
use App\Book;
use Illuminate\Http\Request; 

//Auth
Auth::routes();

//一覧
Route::get('/', 'BooksController@index')->name('book.index');

//Route::middleware('auth')->group(function () {
Route::prefix('books')->middleware('auth')->group(function () {
    //追加
    Route::get('/create','BooksController@create')->name('book.create');
    Route::post('/store','BooksController@store')->name('book.store');

    //編集
    Route::get('/edit/{books}','BooksController@edit')->name('book.edit');
    Route::post('/update','BooksController@update')->name('book.update');

    //削除
    Route::delete('/destroy/{book}','BooksController@destroy')->name('book.destroy');
});


