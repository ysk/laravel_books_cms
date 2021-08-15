<?php
use App\Book;
use Illuminate\Http\Request; 

//Auth
Auth::routes();

//一覧
Route::get('/', 'BooksController@index')->name('book.index');

//Route::middleware('auth')->group(function () {

Route::middleware('auth')->group(function () {


    //書籍情報
    Route::prefix('books')->group(function () {
        Route::get('/create','BooksController@create')->name('book.create');
        Route::post('/store','BooksController@store')->name('book.store');
        Route::get('/edit/{books}','BooksController@edit')->name('book.edit');
        Route::post('/update','BooksController@update')->name('book.update');
        Route::delete('/destroy/{book}','BooksController@destroy')->name('book.destroy');
    });

    //マイページ
    Route::prefix('mypage')->group(function () {
        Route::get('/show','MypageController@show')->name('profile.show');
        Route::get('/edit','MypageController@edit')->name('profile.edit');
        Route::post('/update','MypageController@update')->name('profile.update');
    });

});
