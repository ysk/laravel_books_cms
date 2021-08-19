<?php
use App\Book;
use Illuminate\Http\Request; 

//Auth
Auth::routes();

//一覧
Route::get('/', 'BooksController@index')->name('book.index');
Route::post('/', 'BooksController@searchBooks')->name('book.search');


//他のユーザーのプロフィール
Route::get('/user/{user_id}','UsersController@show')->name('user.show');


//以下ログインしていないと見れない
Route::middleware('auth')->group(function () {


    //書籍情報
    Route::prefix('books')->group(function () {
        Route::get('/create','BooksController@create')->name('book.create');
        Route::post('/store','BooksController@store')->name('book.store');
        Route::get('/edit/{books}','BooksController@edit')->name('book.edit');
        Route::post('/update','BooksController@update')->name('book.update');
        Route::delete('/destroy/{books}','BooksController@destroy')->name('book.destroy');
    });

    //マイページ
    Route::prefix('mypage')->group(function () {
        Route::get('/show','MypageController@show')->name('profile.show');
        Route::get('/edit','MypageController@edit')->name('profile.edit');
        Route::post('/update','MypageController@update')->name('profile.update');
    });

});
